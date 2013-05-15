<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'loominfo-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->textFieldRow($model,'floomsn',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->textFieldRow($model,'floomid',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->textFieldRow($model,'floomx'); ?>
		<?php echo $form->textFieldRow($model,'floomy'); ?>
		<?php echo $form->textFieldRow($model,'fcompanyid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->textFieldRow($model,'frepeaterid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->textFieldRow($model,'fgatherid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->textFieldRow($model,'fstatus'); ?>
		<?php echo $form->textFieldRow($model,'frollid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->textFieldRow($model,'floominfo',array('size'=>60,'maxlength'=>128)); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
