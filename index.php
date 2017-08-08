<?php

/**
 * Created by Dave Tolentin on 7/16/2017.
 */

include 'includes/includes.php';

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
        $data = array();
        for ($i = 0; $i < count($results); $i++) {
            $data[] = $results;
        }
        echo json_encode($data);
    break;

    case 'getViolations':
        $results = $parkingModel->getViolations();
        echo json_encode($results);
    break;

    case 'getParkingSlots':
        $what_parking_area = $_POST['whatParkingArea'];
        $results = $parkingModel->getParkingSlots($what_parking_area);
        echo json_encode(array("available_slots" => $results[0]->available_slots));
    break;

    case 'updateParkingAreaSlot':
        $what_parking_area = $_POST['whatParkingArea'];
        $slot = $_POST['slot'];
        $result = $parkingModel->updateParkingAreaSlot($what_parking_area, $slot);
        $response = array("result" => $result ? TRUE : FALSE);
        echo json_encode($response);
    break;

    default:
    break;
}

?>