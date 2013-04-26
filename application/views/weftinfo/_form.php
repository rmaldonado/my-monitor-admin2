<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'weftinfo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fdensity'); ?>
		<?php echo $form->textField($model,'fdensity'); ?>
		<?php echo $form->error($model,'fdensity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fcycle'); ?>
		<?php echo $form->textField($model,'fcycle'); ?>
		<?php echo $form->error($model,'fcycle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fnumber'); ?>
		<?php echo $form->textField($model,'fnumber',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'fnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flnumber'); ?>
		<?php echo $form->textField($model,'flnumber',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'flnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fquota'); ?>
		<?php echo $form->textField($model,'fquota',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'fquota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fspinfo'); ?>
		<?php echo $form->textField($model,'fspinfo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'fspinfo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frate'); ?>
		<?php echo $form->textField($model,'frate',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'frate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flotnum'); ?>
		<?php echo $form->textField($model,'flotnum',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'flotnum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fsn'); ?>
		<?php echo $form->textField($model,'fsn',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fsn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ffactory'); ?>
		<?php echo $form->textField($model,'ffactory',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ffactory'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->