<?php
    include 'includes/includes.php';
    $result = $parkingModel->getAvailableSlots($_POST['area']);
    echo json_encode($result);
?>