<?php
/**
 * Created by Dave Tolentin on 7/17/2017.
 */

include 'includes/includes.php';
$task = $_REQUEST['task'];
if ($task == 'history') {
	$results = $parkingModel->getParkingHistory();
	echo json_encode($results);
} else if($task == 'parking') {
	$results = $parkingModel->getAvailableSlots($_POST['area']);
	echo json_encode($results);
} else if ($task == 'violation') {
	$results = $parkingModel->getViolations();
	echo json_encode($results);
} else if($task == 'deleteParkingHistory') {
	$ids = $_POST['ids'];
	
	$result = $parkingModel->deleteParkingHistory($ids);
	echo json_encode(array('success' => $result ? TRUE : FALSE));
} else if ($task == 'deleteViolation') {
	$ids = $_POST['ids'];
	$result = $parkingModel->deleteViolation($ids);
	echo json_encode(array('success' => $result ? TRUE : FALSE));
} else if ($task == 'editViolation') {
	$id = $_POST['id'];
	$area = $_POST['area'];
	$pnumber = $_POST['pnumber'];
	$violation = ucfirst($_POST['violation']);
	$car_model = ucfirst($_POST['car_model']);
	$car_color = ucfirst($_POST['car_color']);
	$car_make = ucfirst($_POST['car_make']);
	$additional_details = ucfirst($_POST['additional_details']);
	
	$result = $parkingModel->updateSelectedParkingArea($area, $pnumber, $violation, $id, $car_model, $car_color, $car_make, $additional_details);
	echo json_encode(array('success' => $result ? TRUE : FALSE));
} else if ($task == 'updateSpecificParkingAreaSlot') {
	$area = $_POST['area'];
	$slot = $_POST['slot'];
	$status = $_POST['status'];
	$index = $_POST['index'];
	
	$result = $parkingModel->updateSpecificParkingAreaSlot($area, $slot, $status, $index);
	echo json_encode(array('success' => $result ? TRUE : FALSE));
} else if ($task == 'addViolation') {
	$area = $_POST['area'];
	$pnumber = $_POST['pnumber'];
	$violation = ucfirst($_POST['violation']);
	$car_model = ucfirst($_POST['car_model']);
	$car_color = ucfirst($_POST['car_color']);
	$car_make = ucfirst($_POST['car_make']);
	$additional_details = ucfirst($_POST['additional_details']);
	
	$result = $parkingModel->addViolation($area, $pnumber, $violation, $car_model, $car_color, $car_make, $additional_details);
	echo json_encode(array('success' => $result ? TRUE : FALSE));
} else if ($task == 'resetAt12AM') {
	$result = $parkingModel->resetParkingArea12AM();
	echo json_encode(array('success' => $result ? TRUE : FALSE));
} else if ($task == 'searchParkingHistory') {
	$area = $_POST['area'];
	$date_from = $_POST['date_from'];
	$date_to = $_POST['date_to'];
	
	$results = $parkingModel->searchParkingHistory(array("area" => $area, "date_from" => $date_from, "date_to" => $date_to));
	echo json_encode($results);
} else if ($task == 'searchViolation') {
	$area = $_POST['area'];
	$violation = $_POST['violation'];
	$date_from = $_POST['date_from'];
	$date_to = $_POST['date_to'];
	
	$results = $parkingModel->searchViolation(array("area" => $area, "date_from" => $date_from, "date_to" => $date_to, "violation" => $violation));
	echo json_encode($results);
}
?>