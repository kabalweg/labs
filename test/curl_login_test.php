<?php
session_start();

$user_agent = "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.8) Gecko/20061025 Firefox/1.5.0.8";
$headers = array($user_agent);

$username = "joelb@thelistinc.com"; 
$password = "Thelist1"; 
//$password = "the@list"; 

//$login_url = "http://tlo.joelb.tli-devserver.list.int/log-in.php"; //http://localhost/labs/test/login.php"; 
//$post_login_url = "http://tlo.joelb.tli-devserver.list.int/downloadprofile.php?eid=63487&et=CL&format=-99&ids="; // "http://tlo.joelb.tli-devserver.list.int/index.php"; //http://localhost/labs/test/post_login.php"; 


$id = 1647;
$login_url = "http://tlo.joelb.tli-devserver.list.int/log-in.php"; 
$post_login_url = "http://tlo.joelb.tli-devserver.list.int/index.php?id=";

//$login_url = "http://tlo.joelb.tli-devserver.list.int/log-in.php"; 
//$post_login_url = "http://tlo.joelb.tli-devserver.list.int/downloadprofile.php?et=CL&format=-99&ids=&eid=";

//$login_url = "http://thelistonline.com/log-in.php"; 
//$post_login_url = "http://thelistonline.com/downloadprofile.php?et=CL&format=-99&ids=&eid=";

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

// Call the post login page.
$result = '';
for($x = 0; $x < 50; $x++) {
    //echo $post_login_url.($id+$x).'<br/>';
    curl_setopt ($ch, CURLOPT_URL, $post_login_url.$id); 
    $result = curl_exec ($ch);
    //$result .= '\n\r-------------\n\r';
}

echo $result;  
curl_close($ch);

?>
