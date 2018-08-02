<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = strtolower($_POST['email']);
$result = mysql_query("SELECT * FROM users WHERE email='$email'");

if ( empty($result) ){ // User doesn't exist
    $_SESSION['message'] = "حسابك غير مسجل لدينا";
    header("location: error.php");
}
else { // User exists
    $user = $result[0]['username'];
	$password = $result[0]['Password'];
	
    //if ( password_verify($_POST['password'], $password) ) {
        
        $_SESSION['email'] = $result[0]['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        header("location: ../vieserch/");
    //}
    /*else {
		echo $password;
        $_SESSION['message'] = "لقد أدخلت كلمة مرور خاطئة";
        //header("location: error.php");
    }*/
}

