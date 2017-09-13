<?php
    include 'includes/includes.php';
    $task = $_REQUEST['task'];
    if ($task == 'history') {
        $results = $parkingModel->getParkingHistory();
        echo json_encode($results);
    } elseif($task == 'parking') {
        $results = $parkingModel->getAvailableSlots($_POST['area']);
        echo json_encode($results);
    } elseif ($task == 'violation') {
		$results = $parkingModel->getViolations();
        echo json_encode($results);
	}
?>