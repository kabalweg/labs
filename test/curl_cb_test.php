<?php
session_start();

$user_agent = "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.8) Gecko/20061025 Firefox/1.5.0.8";
$headers = array($user_agent);

$env = 'x';
$max = 30;
if(isset($_GET['e'])) {
    $env = strtolower($_GET['e']);    
}
if(isset($_GET['m'])) {
    $max = (int)$_GET['m'];
}

if($env == 'p') {
    $username = "joelb@thelistinc.com"; 
    $password = "Thelist5"; 
    
    $login_url = "http://thelistonline.com/log-in.php"; 
    $post_login_url = "http://thelistonline.com/preferences.php";
    //$post_login_url = "http://thelistonline.com/index.php";
    //$post_login_url = "http://thelistonline.com/downloadprofile.php?et=CL&format=-99&ids=&eid=1647";
}
else if($env == 's') {
    $username = "joelb@thelistinc.com"; 
    $password = "Thelist1"; 
    
    $login_url = "http://stage.tldev1.com/log-in.php";     
    $post_login_url = "http://stage.tldev1.com/preferences.php";
    //$post_login_url = "http://stage.tldev1.com/index.php";
    //$post_login_url = 'http://stage.tldev1.com/profile-corporate.php?id=5428#all_location_contacts';
    //$post_login_url = "http://stage.tldev1.com/downloadprofile.php?et=CL&format=-99&ids=&eid=33";
}
else if($env == 'd') {
    $username = "joelb@thelistinc.com"; 
    $password = "Thelist1"; 
    
    $login_url = "http://tlo.joelb.tli-devserver.list.int/log-in.php"; 
    //$post_login_url = 'http://tlo.joelb.tli-devserver.list.int/preferences.php';
    //$post_login_url = "http://tlo.joelb.tli-devserver.list.int/index.php";    
    $post_login_url = 'http://tlo.joelb.tli-devserver.list.int/profile-corporate.php?id=5428#all_location_contacts';
    //$post_login_url = 'http://tlo.joelb.tli-devserver.list.int/profile-agency.php?id=37656&pid=288269&from=%2Fprofile-brand.php%3Fid%3D8860#goto_contacts';
    //$post_login_url = 'http://tlo.joelb.tli-devserver.list.int/profile-brand.php?id=8855';
}
else {
    echo "Invalid parameter...";
    exit;
}

$cookie = "cookie.txt"; 
$postdata = "submit=login&txtUserName=".$username."&txtPassword=".$password; 

$ch = curl_init(); 

// Login using curl
curl_setopt ($ch, CURLOPT_URL, $login_url); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_POST, 1); 
curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
$result = curl_exec ($ch); 

set_time_limit(180);

// Call the post login page.
$result = '';
for($x = 0; $x < $max; $x++) {
    $start = date('Y-m-d H:i:s');
    curl_setopt ($ch, CURLOPT_URL, $post_login_url); 
    $result = curl_exec ($ch);        
    echo 'Request #'. $x.') '.$post_login_url.' : '.$start.' = '.date('Y-m-d H:i:s').'<br/>';
    
    if($max > 50) {
        time_nanosleep(0, 500000000); // Delay for half a second.
    }
}

echo $result;  
curl_close($ch);

?>
