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
        $sql = sprintf("SELECT * FROM %s", 'violations');
        $this->db->setSQL($sql);
        return $this->db->getQueryResult();
    }

    public function getParkingSlots($area) {
        $sql = sprintf("SELECT * FROM %s WHERE area = '%s'", 'parking_area', $area);
        $this->db->setSQL($sql);
        return $this->db->getQueryResult();
    }

    public function updateParkingAreaSlot($area, $slot) {
        $sql = sprintf("UPDATE %s SET available_slots = '%s' WHERE area = '%s'", 'parking_area', $slot, $area);
        $this->db->setSQL($sql);
        $result = $this->db->executeSQLStmt();
        return $result ? TRUE : FALSE;
    }
}

?>