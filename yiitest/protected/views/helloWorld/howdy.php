<?php

$cs = Yii::app()->getClientScript();  

$cs->registerScriptFile(
    Yii::app()->baseUrl.'/js/utils.js',
    CClientScript::POS_END
);

//$cs->registerScript(
//    'my-hello-world-1',
//    '
//    
//(function($) {
//
//$("#clickMe").click(function(e) {    
//    alert("You clicked me!");
//    e.preventDefault();
//});
//
//})(jQuery);
//    
//    ',
//    CClientScript::POS_END
//);

?>

<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'focus'=>array($model,'firstName'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <?php echo $form->labelEx($model,'firstName'); ?>
    <?php echo $form->textField($model,'firstName'); ?>
    <?php echo $form->error($model,'firstName'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($model,'lastName'); ?>
    <?php echo $form->textField($model,'lastName'); ?>
    <?php echo $form->error($model,'lastName'); ?>
</div>

<?php $this->endWidget(); ?>

<h1><?php echo $this->greetings; ?></h1>
<a id="clickMe" href="#">Click Me</a>