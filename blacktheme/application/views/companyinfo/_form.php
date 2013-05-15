<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'companyinfo-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->textFieldRow($model,'fname',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->textFieldRow($model,'faddress',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->textFieldRow($model,'floomnum',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->textFieldRow($model,'fdepartnum',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->textFieldRow($model,'finfo',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->textFieldRow($model,'fcreatetm',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->textFieldRow($model,'fstatus'); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
