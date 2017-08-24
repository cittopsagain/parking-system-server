<?php

class LoginModel extends Database {

    private $db = NULL;

    public function __construct() {
        $this->db = new Database();   
    }

    public function adminRequestLogin($data) {
        $sql = sprintf("SELECT * FROM %s WHERE username = '%s' AND password = '%s' AND user_type = 1",
                        'users',
                        $data['username'],
                        md5($data['password'])
                    );
        $this->db->setSQL($sql);
        $this->db->executeSQLStmt();
        $result = $this->db->getQueryResult();
        if (!empty($result)) {
             $fullname = $result[0]->first_name." ".$result[0]->last_name;
        }
        $data = array("exist" => $this->db->getNumOfRows()->num_rows, "fname" => isset($fullname) ? $fullname : "");

        return $data;
    }
}

?>