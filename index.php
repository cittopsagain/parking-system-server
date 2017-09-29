<?php

/**
 * Created by Dave Tolentin on 7/16/2017.
 */

include 'includes/includes.php';
include 'views/header.php';

$task = isset($_GET['task']) ? $_GET['task'] : "";

switch($task) {
    case 'dashboard':
        if (!empty($_GET['redirect'])) {
			include 'views/dashboard.php';
		} else {
			if (!empty($session->get('username'))) {
				include 'views/dashboard.php';
			} else {
				$data = array("username" => isset($_POST['username']) ? $_POST['username'] : "", "password" => isset($_POST['password']) ? $_POST['password'] : "");
				$do_login = $loginModel->adminRequestLogin($data);
				if ($do_login['exist']) {
					$session->set('username', $data['username']);
					$session->set('fname', $do_login['fname']);
					include 'views/dashboard.php';
				} else {
					$session->set('error', 1);
					include 'views/login.php';
				}
			}
		}
    break;
	
    case 'logout':
        $session->forget();
        $loginModel->redirect('?');
    break;
	
	case 'printHistory' :
		$path = realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR .'reports'. DIRECTORY_SEPARATOR .'parking_history.php';
		include $path;
		exit;
	break;
	
	case 'printViolation':
		$path = realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR .'reports'. DIRECTORY_SEPARATOR .'violations.php';
		include $path;
	break;

    default:
        include 'views/login.php';
    break;
}

include 'views/footer.php';

?>