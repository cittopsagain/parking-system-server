<?php

/**
 * Created by Dave Tolentin on 7/27/2017.
 */

class ParkingModel extends Database {

    private $db = NULL;

    public function __construct() {
        $this->db = new Database();   
    }

    public function getViolations() {
        $sql = sprintf("SELECT * FROM %s ORDER BY violation_date DESC", 'violations');
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

    public function addViolation($area, $plate_num, $violation_type) {
        $sql = sprintf("INSERT INTO %s (plate_number, violation_type, area, violation_date) VALUES ('%s', '%s', '%s', NOW())",
                        'violations', $this->db->escapeSpecialChars($plate_num), $this->db->escapeSpecialChars($violation_type), $area);
        $this->db->setSQL($sql);
        $result = $this->db->executeSQLStmt();
        return $result ? TRUE : FALSE;
    }
	
	public function updateViolation($id, $plate_num, $violation_type, $area) {
		$sql = sprintf("UPDATE %s SET plate_number = '%s', violation_type = '%s', area = '%s' WHERE id = %d",
						'violations', $plate_num, $violation_type, $area, $id
					);
		$this->db->setSQL($sql);
		$result = $this->db->executeSQLStmt();
        return $result ? TRUE : FALSE;
	}
}

?>