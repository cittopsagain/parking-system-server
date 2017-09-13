<?php

/**
 * Created by Dave Tolentin on 8/18/2017.
 */

 class ParkingModel extends Database {

    private $db = NULL;
    
    public function __construct() {
        $this->db = new Database();   
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
 }