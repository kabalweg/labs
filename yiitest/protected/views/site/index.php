<?php $this->pageTitle=Yii::app()->name; ?>

<?php

$this->pageTitle = 'Your Title Tag | '.Yii::app()->name;
$this->pageMetaDescription = 'This is a test site';
$this->pageMetaKeywords = 'and this are the keywords';

?>


<?php

$depts = $departments;

var_dump($depts);

?>

<!--
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
-->