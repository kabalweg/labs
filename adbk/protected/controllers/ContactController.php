<?php

class ContactController extends Controller
{
        public $headerTitle = '';
    
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionAdd()
        {
            $this->headerTitle = 'Add';
            $this->render('add');
        }
        
        public function actionEdit()
        {
            $this->headerTitle = 'Edit';
            $this->render('edit');
        }
        
        public function actionDelete()
        {
            $this->headerTitle = 'Delete';
            $this->render('delete');
        }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}