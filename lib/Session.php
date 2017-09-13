<?php

/**
 * Created by Dave Tolentin on 7/16/2017.
 */

class Session {

    private $session = NULL;

    public function __construct() {
        $this->session = session_start();
    }

    public function set($key, $val) {
        $_SESSION[$key] = $val;
    }

    public function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

    public function remove($key) {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    public function forget() {
        session_destroy();
    }
}

?>