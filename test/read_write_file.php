<?php

$readtext = '';
$texttowrite = isset($_POST['texttowrite']) ? $_POST['texttowrite'] : '';
$filename = 'cookie.txt';

if(isset($_POST['read']) && $_POST['read']) {
    
    $handle = fopen($filename, 'r');
    $content = fread($handle, filesize($filename));
    $readtext = $content;
}
else if(isset($_POST['write']) && $_POST['write']) {
    $handle = fopen($filename, 'w');
    $content = fwrite($handle, $texttowrite);
}

?>

<form method="POST" action="">
    <input type="test" name="texttowrite" value="<?php echo $texttowrite; ?>"/>
    <input type="submit" name="write" value="Write to File"/>
    <br/><br/>
    <input type="test" name="readtext" value="<?php echo $readtext; ?>"/>
    <input type="submit" name="read" value="Read File"/>
</form>