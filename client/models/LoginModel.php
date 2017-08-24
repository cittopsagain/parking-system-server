<?php

/**
 * Created by Dave Tolentin on 7/16/2017.
 */

class LoginModel extends Database {

    private $db = NULL;

    public function __construct() {
        $this->db = new Database();   
    }

    public function isUserExist($username, $password) {
        $sql = sprintf("SELECT * FROM %s WHERE username = '%s' AND password = '%s'",
                        'users',
                        $this->db->escapeSpecialChars($username),
                        md5($password)
                    );
        $this->db->setSQL($sql);
        return $this->db->getQueryResult();
    }
}

?>