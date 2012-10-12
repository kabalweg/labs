<?php $this->pageTitle=Yii::app()->name; ?>

<!--
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>
-->

<?php //
/*
$this->menu=array(
	array('label'=>'Company', 'url'=>array('company/index')),
	array('label'=>'Contact', 'url'=>array('contact/index')),
);
*/
?>

<h1>New Contacts</h1>

<?php

$contacts = $model->getData();
//echo Yii::app()->request->scriptUrl;
foreach ($contacts as $contact) {
    //echo 'Contact name: <a href="'.Yii::app()->request->scriptUrl.'/contact/view/'.$contact->id.'">'.$contact->last_name .', '. $contact->first_name.'</a><br/>';
    echo CHtml::encode($contact->getAttributeLabel('contact_name')).':';
    echo CHtml::link(CHtml::encode($contact->last_name .', '. $contact->first_name), array('contact/view/', 'id'=>$contact->id)).'<br/>';
    
    $company = $contact->company;
    echo CHtml::encode($company->getAttributeLabel('company_name')).':';
    //echo $company->company_name.'<br/>';
    echo CHtml::link(CHtml::encode($company->company_name), array('company/view/', 'id'=>$company->id)).'<br/>';
    echo '<br/>';
}


?>