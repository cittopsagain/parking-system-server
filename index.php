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
				$data = array("username" => $_POST['username'], "password" => $_POST['password']);
				$do_login = $loginModel->adminRequestLogin($data);
				if ($do_login['exist']) {
					$session->set('username', $data['username']);
					$session->set('fname', $do_login['fname']);
					include 'views/dashboard.php';
				}
			}
		}
    break;
	
    case 'logout':
        $session->forget();
        $loginModel->redirect('?');
    break;

    default:
        include 'views/login.php';
    break;
}

include 'views/footer.php';

?>