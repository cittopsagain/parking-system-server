<?php

/**
 * Created by Dave Tolentin on 7/16/2017.
 */

include 'lib/Database.php';
include 'lib/Session.php';
include 'lib/Encryption.php';
include 'models/LoginModel.php';
include 'models/ParkingModel.php';
include 'third_party/TCPDF/tcpdf.php';
include 'lib/TcpdfHelper.php';

// error_reporting(0);
$session = new Session();
$encryption = new Encryption();
$loginModel = new LoginModel();
$parkingModel = new ParkingModel();

?>