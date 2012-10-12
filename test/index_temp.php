<!--
<form method="post" action="" stlye="font-family:courier">
<textarea rows="20" cols="80" name="code" spellcheck="false">Type your code here...</textarea>
<br/>
<input type="submit" name="submit" value="Execute" />
</form>
-->

<pre>
<?php

//http://wordpress.org/support/topic/cannot-get-categories-to-work-using-postie


$arr = array(date('Y-m-d H:i:s'));
for($x = 0; $x < 30; $x++) {
    
    $date = date('Y-m-d H:i:s');
    echo $date.'<br/>';
    
    array_unshift($arr, $date);
    
    if(count($arr) >= 10) {
        array_pop($arr);
    }
    
    sleep(1);    
}

echo '<br/><br/>';
$len = count($arr);
for($x = 0; $x < $len; $x++) {
    echo $arr[$x]."<br/>";
}


/*
print_r($arr);
echo '<br/>';
array_unshift($arr, date('Y-m-d H:i:s'));
print_r($arr);
echo '<br/>';
array_unshift($arr, date('Y-m-d H:i:s'));
print_r($arr);
echo '<br/>';
*/

if(isset($_POST['submit'])) {
    
    $default = 'kabalweg@gmail.com';
    $cc = array("kentw@thelistinc.com" => "Kent Wise", "paul@synaxisworks.com"=>"Paul Welty");

    $new_cc = array();
    foreach ($cc as $addr => $name) {
        //$new_cc[] = array(DEFAULT_EMAIL => $name);
        //$obj = new stdClass();
        //$obj->{$default} = $name;
        //array_push($new_cc, $obj);
        $new_cc[$default] = $name;
    }
    $cc = $new_cc;
    
    //$code = addslashes($_POST['code']);
    //eval($code);
    /*    
    $for_upload_folder = 'new';
    $finished_upload_folder = 'old';


    $old_filename = 'putty,_screenshots-thelistinc.com.png';
    //$new_filename = 'putty_screenshots.png';
    $new_filename = '';

    echo 'File: '.$for_upload_folder.'/'.$old_filename.'<br/>';

    if(copy($for_upload_folder.'/'.$old_filename, $finished_upload_folder.'/'.$old_filename)) {
        echo 'Copied: '.$for_upload_folder.'/'.$old_filename.' to '.$finished_upload_folder.'/'.$old_filename.'<br/>';

        // Extract the file extension.
        $array_file_extension = explode('.', $old_filename);
        $file_extension = $array_file_extension[count($array_file_extension)-1];

        // Extract the names.
        $array_name = explode('-', $old_filename);

        // Remove the underscode.
        $sanitized_title = ucwords(str_replace('_', ' ', $array_name[0]));
        // Remove the comma.
        $new_filename = str_replace(',', '', $array_name[0]).'.'.$file_extension;
        $source_url = 'http://'.str_replace('.'.$file_extension, '', $array_name[1]);

        echo 'Title: '.$sanitized_title.'<br/>';
        echo 'New filename: '.$new_filename.'<br/>';
        echo 'Source URL: '.$source_url.'<br/>';

        // Rename the file.
        //if(rename($old_folder.'/'.$old_filename, $old_folder.'/'.$new_filename)) {
        if(rename($for_upload_folder.'/'.$old_filename, $for_upload_folder.'/'.$new_filename)) {
            echo 'Renamed: '.$for_upload_folder.'/'.$new_filename. ' to '.$for_upload_folder.'/'.$old_filename.'<br/>';

            // TODO: Upload file here.
        }
        else {
            echo 'Error renaming!<br/>';
        }            
    }
    else {
        echo 'Error copying!<br/>';
    }
     * 
     */
}
?>
</pre>
