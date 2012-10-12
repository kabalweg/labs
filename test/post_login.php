<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) {
    echo "Thanks for logging in, ". $_SESSION['username'];
}

//$username = '';
//$password = '';

//if(isset($_REQUEST['submit'])) {
//    $username = $_REQUEST['username'];
//    $password = $_REQUEST['password'];
//    
//    if(!empty($username) && !empty($password)) {
//        echo 'Thanks for logging in.<br/><br/>';
//        
//        $_SESSION['username'] = $username;
//        $_SESSION['password'] = $password;
//    }
//    else {
//        echo 'Invalid username/password.<br/><br/>';
//    }
//}

?>
