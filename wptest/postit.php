<?php

require_once('wp-load.php');
require_once('wp-config.php');

//print_r($post);

// Get the last future post.
$posts = query_posts(array('post_status'=>'future', 'orderby'=>'post_date', 'order'=>'DESC', 'showposts'=>'1'));
// Is there a future post?
if(isset($posts[0]->post_date)) {
    // Yes! Use the date for the next post date.
    $today = strtotime($posts[0]->post_date);
}
else {
    // No. Use today's date for the next post date.
    $today = time();
}

//$result = rename()
//$handle = opendir('temp');
//if ($handle !== FALSE) {
//    echo "Directory handle: $handle<br/>";
//    echo "Entries:<br/>";
    
    // Connect to the database.
    $connection = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    mysql_select_db(DB_NAME);
    
    $query = "SELECT id,
                     filename,
                     description 
              FROM temp_post";
    
    $result = mysql_query($query);
    
    //while (false !== ($entry = readdir($handle))) {
    while ($row = mysql_fetch_object($result)) {
        if(strstr($row->filename, '.jpg') !== FALSE) {
            
            $source = 'temp/'.$row->filename;
            $dest = 'wp-content/images/'.$row->filename;
            
            // Rename, but suppress any error.
            $renamed = @rename($source, $dest);
            if($renamed) {
                echo $entry." moved<br/>";
                
                // Increment the date. This, including the $h and $m will be use as the post date.
                $next_date = strtotime('+1 day', $today);
                // Get the hour and minute
                $h = str_pad(rand(6, 18), 2, '0', STR_PAD_LEFT);
                $m = str_pad(rand(1, 59), 2, '0', STR_PAD_LEFT);
                
                // Post content.
                $content  = '';
                $content .= '<div class="cc_large_image_container"><div class="image"><img class="cc_large_image" src="'.$dest.'" /></div>';
                $content .= '<div class="description">'.$row->description.'</div></div>';
                    
                // Create post object
                $my_post = array(
                    'post_title' => 'Post: '.date('Y-m-d',$next_date),
                    'post_content' => $content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_category' => array(1),
                    'post_date' => date('Y-m-d',$next_date).' '.$h.':'.$m.':00', //'2012-08-03 09:00:00'
                    'filter' => true
                );
                
                //var_dump($my_post);
                echo '<br/><br/>';
                // Insert the post into the database
                $post = wp_insert_post( $my_post, TRUE );
                
                if($post > 0) {
                    echo $entry." posted<br/>";
                    
                    // Save for the next post.
                    $today = $next_date;
                }
                else {
                    echo $entry." not posted<br/>";
                }
                
            }
            else {
                echo $entry." not moved<br/>";
            }
        }
    }

//    closedir($handle);
//}
  
?>
    