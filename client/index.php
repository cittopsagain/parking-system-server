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
		$sort_by = $_POST['sortBy'];
        $results = $parkingModel->getViolations($sort_by);
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
        $violation_type = ucfirst($_POST['violationType']);
        $car_model = ucfirst($_POST['carModel']);
        $car_color = ucfirst($_POST['carColor']);
		$car_make = ucfirst($_POST['carMake']);
        $additional_details = ucfirst($_POST['additionalDetails']);
        $result = $parkingModel->addViolation($what_parking_area, $plate_num, $violation_type, $car_model, $car_color, $car_make, $additional_details);
        $response = array("sucess" => $result ? TRUE : FALSE);
        echo json_encode($response);
    break;
	
	case 'updateViolation':
		$what_parking_area = $_POST['area'];
        $plate_num = ucfirst($_POST['plateNumber']);
        $violation_type = ucfirst($_POST['violation']);
        $car_model = ucfirst($_POST['carModel']);
        $car_color = ucfirst($_POST['carColor']);
        $car_make = ucfirst($_POST['carMake']);
        $additional_details = ucfirst($_POST['additionalDetails']);
        $id = $_POST['id'];
		$result = $parkingModel->updateViolation($id, $plate_num, $violation_type, $what_parking_area, $car_model, $car_color, $car_make, $additional_details);
        $response = array("sucess" => $result ? TRUE : FALSE);
        echo json_encode($response);
	break;

    case 'connect':
        echo json_encode(array('success' => TRUE));
    break;
	
	case 'deleteViolation':
		$id = $_POST['id'];
		$result = $parkingModel->deleteViolation($id);
		$response = array('success' => $result ? TRUE : FALSE);
	break;
	
	case 'resetParkingAreas':
		$areas_to_reset = $_POST['areas'];
		$result = $parkingModel->resetParkingAreas($areas_to_reset);
		echo json_encode($result);
	break;

    default:
    break;
}

?>