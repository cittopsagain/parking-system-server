<?php

/**
 * Created by Dave Tolentin on 7/16/2017.
 */

class Database {

    private $sql = "";
    private $mysqli = NULL;
    private $lastInsertedId = "";

    public function __construct() {
        $this->mysqli = new mysqli("localhost", "root", "", "cit_parking_system_db");
        if ($this->mysqli->connect_errno) {
           printf("Connect failed: %s\n", $this->mysqli->connect_error);
           exit();
        }
    }

    public function setSQL($sql) {
        $this->sql = $sql;
    }

    public function executeSQLStmt() {
        $result = $this->mysqli->query($this->sql);
        if (!$result) {
            printf("Error: %s\n", $this->mysqli->error);
        } else {
            $this->lastInsertedId = $this->mysqli->insert_id;
            return $result;
        }
    }

    function getLastInsertedId() {
        return $this->lastInsertedId;
    }

    public function escapeSpecialChars($char) {
        return $this->mysqli->real_escape_string($char);
    }

    public function getQueryResult() {
        $objArray = array();
        $result = $this->executeSQLStmt();
        if (!$result) {
            printf("Error: %s\n", $this->mysqli->error);
        } else {
            while ($obj = $result->fetch_object()) {
                $objArray[] = $obj;
            }
            $result->close();
        }

        return $objArray;
    }

    public function getNumOfRows() {
        $result = $this->executeSQLStmt();
        return $result;
        if (!$result) {
            printf("Error: %s\n", $this->mysqli->error);
        } else {
            $result->close();
            return $result->num_rows;
        }
    }
}

?>