<?php

/**
 * Created by Dave Tolentin on 7/27/2017.
 */

class ParkingModel extends Database {

    private $db = NULL;

    public function __construct() {
        $this->db = new Database();   
    }

    public function getViolations($sort_by) {
		if (!empty($sort_by)) {
			$sort_by = $sort_by.", ";
		}
        $sql = sprintf("SELECT * FROM %s ORDER BY %s violation_date DESC", 'violations', $sort_by);
        $this->db->setSQL($sql);
        return $this->db->getQueryResult();
    }

    public function getParkingHistory() {
        $sql = sprintf("SELECT * FROM %s ORDER BY date_time_park DESC", 'parking_history');
        $this->db->setSQL($sql);
        return $this->db->getQueryResult();
    }

    public function getParkingSlots() {
        $sql = sprintf("SELECT * FROM %s", 'parking_area');
        $this->db->setSQL($sql);
        return $this->db->getQueryResult();
    }

    public function updateParkingAreaSlot($area, $slot) {
        $sql = sprintf("UPDATE %s SET available_slots = '%s' WHERE area = '%s'", 'parking_area', $slot, $area);
        $this->db->setSQL($sql);
        $result = $this->db->executeSQLStmt();
        return $result ? TRUE : FALSE;
    }

    public function addToParkingHistory($area, $slot) {
        $sql = sprintf("INSERT INTO %s (area, slot_no, date_time_park) VALUES ('%s', '%s', NOW())",
                        'parking_history', $area, $slot
                    );
        $this->db->setSQL($sql);
        $result = $this->db->executeSQLStmt();
        return $result ? TRUE : FALSE;
    }

    public function addViolation($area, $plate_num, $violation_type, $car_model, $car_color) {
        $sql = sprintf("INSERT INTO %s (plate_number, violation_type, car_model, car_color, area, violation_date) VALUES ('%s', '%s', '%s', '%s', '%s', NOW())",
                        'violations', 
						$this->db->escapeSpecialChars($plate_num),
						$this->db->escapeSpecialChars($violation_type), 
						$this->db->escapeSpecialChars($car_model), 
						$this->db->escapeSpecialChars($car_color), 
						$area
					);
        $this->db->setSQL($sql);
        $result = $this->db->executeSQLStmt();
        return $result ? TRUE : FALSE;
    }
	
	public function updateViolation($id, $plate_num, $violation_type, $area, $car_model, $car_color) {
		$sql = sprintf("UPDATE %s SET plate_number = '%s', violation_type = '%s', car_model = '%s', car_color = '%s', area = '%s' WHERE id = %d",
						'violations', 
						$this->db->escapeSpecialChars($plate_num), 
						$this->db->escapeSpecialChars($violation_type), 
						$this->db->escapeSpecialChars($car_model), 
						$this->db->escapeSpecialChars($car_color), 
						$area, 
						$id
					);
		$this->db->setSQL($sql);
		$result = $this->db->executeSQLStmt();
        return $result ? TRUE : FALSE;
	}
	
	public function deleteViolation($id) {
		$sql = sprintf("DELETE FROM %s WHERE id = %d", 'violations', $id);
		$this->db->setSQL($sql);
		$result = $this->db->executeSQLStmt();
		return $result ? TRUE : FALSE;
	}
	
	public function resetParkingAreas($areas_to_reset) {
		$areas_to_reset_arr = explode(",", $areas_to_reset);
		$areas = array();
		for ($i = 0; $i < count($areas_to_reset_arr); $i++) {
			if ($areas_to_reset_arr[$i] != "") {
				$areas[] = trim($areas_to_reset_arr[$i]);
				// $this->forceUnpark(trim($areas_to_reset_arr[$i]));
			}
		}
		// For now reset only the Highschool area
		return $this->forceUnpark('High School Area');
	}
	
	public function forceUnpark($area) {
		$sql = sprintf("SELECT * FROM %s WHERE area = '%s'", 'parking_area', $area);
		$this->db->setSQL($sql);
		$result = $this->db->getQueryResult();
		if (count($result) > 0) {
			$slots = $result[0]->available_slots;
			$slots_arr = explode(",", $slots);
			// Do not reset if all slots are vacant
			if (count($slots_arr) == 61) {
				return array('reset' => FALSE, 'vacant_all' => TRUE);
				exit;
			}
			// If not empty means has available slots
			if (trim($slots_arr[0]) != "") {
				$available_array = array();
				for ($i = 0; $i < count($slots_arr); $i++) {
					if ($slots_arr[$i] != "") {
						$available_array[$i] = $slots_arr[$i];
					}
				}
				// For now set the max limit to 61
				// 61 is the maximum limit of the Highschool area
				$all_slots_array = array();
				for ($j = 1; $j < 62; $j++) {
					$all_slots_array[$j] = $j;
				}
				$slots_to_force_unpark = array_merge(array_diff($available_array, $all_slots_array), array_diff($all_slots_array, $available_array));
				$success = TRUE;
				for ($k = 0; $k < count($slots_to_force_unpark); $k++) {
					// Set the current date and time when the force unpark happens
					$result = $this->addToParkingHistory($area, $slots_to_force_unpark[$k]);
					if (!$result) {
						$success = FALSE;
						break;
					}
				}
				if ($success) {
					$success = $this->resetParkingArea($area, $all_slots_array);
				}
				return array('reset' => $success, 'vacant_all' => FALSE);
			} else {
				// Occupied all, so free all the unparked
				$success = TRUE;
				$all_slots_array = array();
				for ($j = 1; $j < 62; $j++) {
					$all_slots_array[$j] = $j;
					$result = $this->addToParkingHistory($area, $all_slots_array[$j]);
					if (!$result) {
						$success = FALSE;
						break;
					}
				}
				
				if ($success) {
					$success = $this->resetParkingArea($area, $all_slots_array);
				}
				return array('reset' => $success, 'vacant_all' => FALSE);
			}
		}
		return array('reset' => FALSE);
	}
	
	public function resetParkingArea($area, $slots) {
		$sql = sprintf("UPDATE %s SET available_slots = '%s' WHERE area = '%s'", 'parking_area', implode(',', $slots), $area);
		$this->db->setSQL($sql);
		$result = $this->db->executeSQLStmt();
		return ($result) ? TRUE : FALSE;
	}
}

?>