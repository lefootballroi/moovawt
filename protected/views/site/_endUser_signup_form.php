
<div class='form'>
	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'this-form',
	'enableAjaxValidation'=>false,
	"enableClientValidation"=>true,	
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
							),		
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <?php echo $form->labelEx($model,'user_email'); ?>
    <?php echo $form->textField($model,'user_email'); ?>
    <?php echo $form->error($model,'user_email'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($model,'user_pass'); ?>
    <?php echo $form->passwordField($model,'user_pass'); ?>
    <?php echo $form->error($model,'user_pass'); ?>
</div>


<div class="row">
    <?php echo Chtml::submitButton('Signup',array('name'=>'submit')); ?>
</div>


<?php $this->endWidget(); ?>

	
</div>
