<?php
$this->breadcrumbs=array(
	'Contacts',
);

/*
$this->menu=array(
	array('label'=>'Create Contact', 'url'=>array('create')),
	array('label'=>'Manage Contact', 'url'=>array('admin')),
);
 */
?>

<h1>Contacts</h1>

<?php 
/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/

$contacts = $dataProvider->getData();

foreach ($contacts as $contact) {
    //echo 'Contact name: '.$contact->last_name.', '.$contact->first_name.'<br/>';
    echo CHtml::encode($contact->getAttributeLabel('contact_name')).': ';
    echo CHtml::link(CHtml::encode($contact->last_name.', '.$contact->first_name), array('contact/view/', 'id'=>$contact->id)).'<br/>';
    
    $company = $contact->company;
    //echo 'Company: '.$company->company_name.'<br/>';
    echo '&nbsp;&nbsp;'.CHtml::encode($company->getAttributeLabel('company_name')).': ';
    echo CHtml::link(CHtml::encode($company->company_name), array('company/view/', 'id'=>$company->id)).'<br/>';
    
    echo '<br>';
}

?>
