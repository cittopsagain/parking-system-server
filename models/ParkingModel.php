<?php

/**
 * Created by Dave Tolentin on 8/18/2017.
 */

 class ParkingModel extends Database {

    private $db = NULL;
	private $date = NULL;
    
    public function __construct() {
		date_default_timezone_set('Asia/Manila');
        $this->db = new Database();   
		$this->date = new DateTime();
    }

    public function getAvailableSlots($area) {
		if ($area != "") {
			$area = ' AND area = "'.$area.'"';
		}
        $sql = sprintf("SELECT * FROM %s WHERE 1 %s", 'parking_area', $area); 
        $this->db->setSQL($sql);
		return $this->db->getQueryResult();
    }

    public function getParkingHistory() {
        $sql = sprintf("SELECT * FROM %s ORDER BY date_time_park DESC", 'parking_history');
        $this->db->setSQL($sql);
        return $this->db->getQueryResult();
    }
	
	public function getViolations() {
		$sql = sprintf("SELECT * FROM %s ORDER BY violation_date DESC", 'violations');
        $this->db->setSQL($sql);
        return $this->db->getQueryResult();
	}
	
	public function deleteParkingHistory($ids) {
		$ids = explode(",", $ids);
		$success = FALSE;
		for ($i = 0; $i < count($ids); $i++) {
			$sql = sprintf("DELETE FROM %s WHERE id = %d", 'parking_history', $ids[$i]);
			$this->db->setSQL($sql);
			$result = $this->db->executeSQLStmt();
			if (!$result) {
				break;
			}
			$success = TRUE;
		}
		return $success;
	}
	
	public function deleteViolation($ids) {
		$ids = explode(",", $ids);
		$success = FALSE;
		for ($i = 0; $i < count($ids); $i++) {
			$sql = sprintf("DELETE FROM %s WHERE id = %d", 'violations', $ids[$i]);
			$this->db->setSQL($sql);
			$result = $this->db->executeSQLStmt();
			if (!$result) {
				break;
			}
			$success = TRUE;
		}
		return $success;
	}
	
	public function updateSelectedParkingArea($area, $pnumber, $violation, $id, $car_model, $car_color, $car_make, $additional_details) {
		$sql = sprintf("UPDATE %s SET plate_number = '%s', violation_type = '%s', car_model = '%s', car_color = '%s', area = '%s', car_make = '%s', additional_details = '%s' WHERE id = %d", 
						'violations', 
						$this->db->escapeSpecialChars($pnumber), 
						$this->db->escapeSpecialChars($violation), 
						$this->db->escapeSpecialChars($car_model), 
						$this->db->escapeSpecialChars($car_color), 
						$area, 
						$this->db->escapeSpecialChars($car_make), 
						$this->db->escapeSpecialChars($additional_details),
						$id
					);
		$this->db->setSQL($sql);
		$result = $this->db->executeSQLStmt();
		return $result ? TRUE : FALSE;
	}
	
	public function updateSpecificParkingAreaSlot($area, $slot, $status, $index) {
		$sql = sprintf("UPDATE %s SET available_slots = '%s' WHERE area = '%s'", 'parking_area', $slot, $area);
		$this->db->setSQL($sql);
		$result = $this->db->executeSQLStmt();
		$success = FALSE;
		if ($result) {
			$success = TRUE;
			if ($status == 'occupied') {
				$sql = sprintf("INSERT INTO %s (area, slot_no, date_time_park) VALUES('%s', '%s', NOW())", 'parking_history', $area, $index);
				$this->db->setSQL($sql);
				$success = $this->db->executeSQLStmt() ? TRUE : FALSE;
			}
		}
		return $success;
	}
	
	public function addViolation($area, $pnumber, $violation, $car_model, $car_color, $car_make, $additional_details) {
		$sql = sprintf("INSERT INTO %s (plate_number, violation_type, car_model, car_color, area, additional_details, car_make, violation_date) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', NOW())",
                        'violations', 
						$this->db->escapeSpecialChars($pnumber),
						$this->db->escapeSpecialChars($violation), 
						$this->db->escapeSpecialChars($car_model), 
						$this->db->escapeSpecialChars($car_color), 
						$area,
						$this->db->escapeSpecialChars($additional_details), 
						$this->db->escapeSpecialChars($car_make)
					);
        $this->db->setSQL($sql);
        $result = $this->db->executeSQLStmt();
        return $result ? TRUE : FALSE;
	}
	
	public function resetParkingArea12AM() {
		// Set for now to High School area
		$current = $this->date->format('Y-m-d H:i:s');
		$current_date = date_create($current);
		$midnight = date_create(date('Y-m-d H:i:s', strtotime('today midnight')));
		$interval = date_diff($current_date, $midnight);
		if ($interval->invert == 1 && $interval->h <= 1) {
			$sql = sprintf("UPDATE %s SET available_slots = '%s' WHERE area = 'High School Area'", 'parking_area', $this->slots());
			$this->db->setSQL($sql);
			$result = $this->db->executeSQLStmt();
			return $result ? TRUE : FALSE;
		}
	}
	
	private function slots() {
		$all_slots_array = array();
		for ($j = 1; $j < 55; $j++) {
			$all_slots_array[$j] = $j;
		}
		
		return implode(',', $all_slots_array);
	}
	
	public function searchParkingHistory($data) {
		$date_from = date('Y-m-d', strtotime(str_replace('-', '/', $data['date_from'])));
		$date_to = date('Y-m-d', strtotime(str_replace('-', '/', $data['date_to'])));
		$filter = "";
		if (!empty($data['area'])) {
			$filter .= " AND area LIKE '%".$this->db->escapeSpecialChars($data['area'])."%'";
		}
		
		if (!empty($data['date_from']) && empty($data['date_to'])) {
			$filter .= " AND date_time_park >= '".$date_from."'";
		}
		
		if (empty($data['date_from']) && !empty($data['date_to'])) {
			$filter .= " AND date_time_park <= '".$date_to."'";
		}
		
		if (!empty($data['date_from']) && !empty($data['date_to'])) {
			$filter .= " AND date_time_park BETWEEN '".$date_from."' AND '".$date_to."'";
		}
		$sql = sprintf("SELECT * FROM %s WHERE 1 %s", 'parking_history', $filter);
		$this->db->setSQL($sql);
		return $this->db->getQueryResult();
	}
	
	public function searchViolation($data) {
		$date_from = date('Y-m-d', strtotime(str_replace('-', '/', $data['date_from'])));
		$date_to = date('Y-m-d', strtotime(str_replace('-', '/', $data['date_to'])));
		$filter = "";
		if (!empty($data['area'])) {
			$filter .= " AND area LIKE '%".$this->db->escapeSpecialChars($data['area'])."%'";
		}
		
		if (!empty($data['date_from']) && empty($data['date_to'])) {
			$filter .= " AND violation_date >= '".$date_from."'";
		}
		
		if (empty($data['date_from']) && !empty($data['date_to'])) {
			$filter .= " AND violation_date <= '".$date_to."'";
		}
		
		if (!empty($data['date_from']) && !empty($data['date_to'])) {
			$filter .= " AND violation_date BETWEEN '".$date_from."' AND '".$date_to."'";
		}
		
		if (!empty($data['violation'])) {
			$filter .= " AND violation_type LIKE '%".$this->db->escapeSpecialChars($data['violation'])."%'";
		}
		
		$sql = sprintf("SELECT * FROM %s WHERE 1 %s", 'violations', $filter);
		$this->db->setSQL($sql);
		return $this->db->getQueryResult();
	}
 }