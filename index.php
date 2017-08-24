<?php

/**
 * Created by Dave Tolentin on 7/16/2017.
 */

include 'includes/includes.php';
include 'views/header.php';

$task = $encryption->decrypt(isset($_GET['task']) ? $_GET['task'] : "");

switch($task) {
    case 'login':
        $loginModel = new LoginModel();
        $data = array("username" => $_POST['username'], "password" => $_POST['password']);
        $doLogin = $loginModel->adminRequestLogin($data);
        if ($doLogin['exist']) {
            $session->set('username', $data['username']);
            $session->set('fname', $doLogin['fname']);
            include 'views/dashboard.php';
        } else {
            $session->set('error', true);
            include 'views/login.php';
        }
    break;

    case 'logout':
        echo "Here";
    break;

    default:
        include 'views/login.php';
    break;
}

include 'views/footer.php';

?>