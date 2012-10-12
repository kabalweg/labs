<?php

$str = '&lt;a href=&quot;http://creativecommons.org/licenses/by-nc-nd/3.0/us/&quot; rel=&quot;nofollow&quot;&gt;&lt;/a&gt;This work by &lt;a href=&quot;http://www.flickr.com/photos/nodivision/&quot;&gt;Alix Clinkingbeard&lt;/a&gt; is licensed under a &lt;a href=&quot;http://creativecommons.org/licenses/by-nc-nd/3.0/us/&quot; rel=&quot;nofollow&quot;&gt;Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 United States License&lt;/a&gt;';
echo $str;
echo '<br/><br/>';
echo html_entity_decode($str);


?>