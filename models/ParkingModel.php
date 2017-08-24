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
        $sql = sprintf("SELECT * FROM %s WHERE area = '%s'", 'parking_area', $area); 
        $this->db->setSQL($sql);
        return $this->db->getQueryResult();
    }
 }