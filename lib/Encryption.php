<?php

/**
 * Created by Dave Tolentin on 7/16/2017.
 */

class Encryption {

    private $key = "";

    public function __construct() {
        $this->key = "qJB0rGtIn5UB1xG03efyCp";
    }

    public function encrypt($str) {
        return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($this->key), $str, MCRYPT_MODE_CBC, md5(md5($this->key))));
    }

    public function decrypt($str) {
        return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($this->key), base64_decode($str), MCRYPT_MODE_CBC, md5(md5($this->key))), "\0");
    }
}

?>