<?php
session_start();

$username = '';
$password = '';

if(isset($_REQUEST['submit'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    if(!empty($username) && !empty($password)) {
        echo 'Thanks for logging in.<br/><br/>';
        
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
    }
    else {
        echo 'Invalid username/password.<br/><br/>';
        session_destroy();
    }
}

?>

<form method='post' action='login.php'>
    Email Address: <input type='text' name='username'><br/>
    Password: <input type='password' name='password'><br/>
    Password: <input type='submit' name='submit' value="submit">
</form>