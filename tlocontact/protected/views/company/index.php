<?php
$this->breadcrumbs=array(
	'Companies',
);

/*
$this->menu=array(
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'Manage Company', 'url'=>array('admin')),
);
*/
?>

<h1>Companies</h1>

<?php 
/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
 */

$companies = $dataProvider->getData();
foreach ($companies as $company) {
    //var_dump($company);
    
    //echo 'Company: '.$company->company_name.'<br/>';
    echo CHtml::encode($company->getAttributeLabel('company_name')).': ';
    //echo CHtml::link(CHtml::encode($company->company_name), array('company/view/', 'id'=>$company->id)).'<br/>';
    //echo $company->getUrl();
    echo $company->getLink().'<br/>';
    
    $contacts = $company->contacts;
    
    foreach ($contacts as $contact) {
        //echo 'Contact name: '.$contact->last_name.', '.$contact->first_name.'<br/>';
        //echo 'Contact name: ';
        echo '&nbsp;&nbsp;'.CHtml::encode($contact->getAttributeLabel('contact_name')).': ';
        echo CHtml::link(CHtml::encode($contact->last_name.', '.$contact->first_name), array('contact/view/', 'id'=>$contact->id, 'title'=>'kabalweg dabsani')).'<br/>';
    }
    echo '<br/>';
}

?>
