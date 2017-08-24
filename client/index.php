<?php

/**
 * Created by Dave Tolentin on 7/16/2017.
 */

include '../lib/Database.php';
include 'models/LoginModel.php';
include 'models/ParkingModel.php';

$loginModel = new LoginModel();
$parkingModel = new ParkingModel();

$task = $_REQUEST['task'];

switch($task) {
    case 'login':
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = $loginModel->isUserExist($username, $password);
        $exist = FALSE;
        if (!empty($result)) {
            $exist = TRUE;
            $fname = $result[0]->first_name;
            $lname = $result[0]->last_name;
            $img_path = $result[0]->img_path;
        }
        $response = array('exist' => $exist, 'fname' => isset($fname) ? $fname : "", 'lname' => isset($lname) ? $lname : "", 'img_path' => isset($img_path) ? $img_path : "");
        echo json_encode($response);
    break;

    case 'getParkingHistory':
        $results = $parkingModel->getParkingHistory();
        echo json_encode($results);
    break;

    case 'getViolations':
        $results = $parkingModel->getViolations();
        echo json_encode($results);
    break;

    case 'getParkingSlots':
        $results = $parkingModel->getParkingSlots();
        echo json_encode($results);
    break;

    case 'updateParkingAreaSlot':
        $what_parking_area = $_POST['whatParkingArea'];
        $slot = $_POST['slot'];
        $result = $parkingModel->updateParkingAreaSlot($what_parking_area, $slot);
        $response = array("sucess" => $result ? TRUE : FALSE);
        echo json_encode($response);
    break;

    case 'addToParkingHistory':
        $what_parking_area = $_POST['whatParkingArea'];
        $slot = $_POST['slot'];
        $result = $parkingModel->addToParkingHistory($what_parking_area, $slot);
        $response = array("sucess" => $result ? TRUE : FALSE);
        echo json_encode($response);
    break;

    case 'addViolation':
        $what_parking_area = $_POST['whatParkingArea'];
        $plate_num = ucfirst($_POST['plateNumber']);
        $violationType = ucfirst($_POST['violationType']);
        $result = $parkingModel->addViolation($what_parking_area, $plate_num, $violationType);
        $response = array("sucess" => $result ? TRUE : FALSE);
        echo json_encode($response);
    break;

    default:
    break;
}

?>