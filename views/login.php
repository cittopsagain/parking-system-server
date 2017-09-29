<?php
if ($session->get('username')) {
	header('Location: ?task=dashboard&redirect=1');
}
$error = $session->get('error');

$class = "alert alert-danger display-hide";
$error_txt = "Please enter username and or password.";
if ($error) {
    $class = "alert alert-danger";
    $session->remove('error');
    $error_txt = "Invalid username or password.";
}
?>
<!-- <body class=" login" style="background-color: #800000;"> -->
<body class=" login">
    <!-- BEGIN LOGO -->
    <div class="logo">
         <!-- <span class="form-title"> CIT-U PARKING SYSTEM </span> -->
        <img src="/cit_parking_system/images/ic_logo_small.png" /><br/>
		<img src="/cit_parking_system/images/ic_logo.png" />
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="<?php echo "?task=dashboard"; ?>" method="post">
            <div class="form-title">
                <span class="form-title">Welcome.</span>
                <span class="form-subtitle">Please login.</span>
            </div>
            <div class="<?php echo $class; ?>">
                <button class="close" data-close="alert"></button>
                <span> <?php echo $error_txt; ?> </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <!-- <input class="form-control form-control-solid placeholder-no-fix" type="text" style="background-color: #ffffff;" autocomplete="off" placeholder="Username" name="username" /> -->
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" />
                 </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <!-- <input class="form-control form-control-solid placeholder-no-fix" style="background-color: #ffffff; text-color: #ffffff;" type="password" autocomplete="off" placeholder="Password" name="password" /> -->
                <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> 
            </div>
            <div class="form-actions">
                <!-- <button type="submit" class="btn red btn-block uppercase" style="background-color: #FFD700;">-->
                <button type="submit" class="btn red btn-block uppercase">
                    Login
                </button>
            </div>
        </form>
    </div>
<!-- END LOGIN -->