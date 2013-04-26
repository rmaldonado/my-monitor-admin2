<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fid'); ?>
		<?php echo $form->textField($model,'fid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fnumber'); ?>
		<?php echo $form->textField($model,'fnumber',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdensity'); ?>
		<?php echo $form->textField($model,'fdensity',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fminirate'); ?>
		<?php echo $form->textField($model,'fminirate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fquota'); ?>
		<?php echo $form->textField($model,'fquota',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fspinfo'); ?>
		<?php echo $form->textField($model,'fspinfo',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frate'); ?>
		<?php echo $form->textField($model,'frate',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flotnum'); ?>
		<?php echo $form->textField($model,'flotnum',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fsn'); ?>
		<?php echo $form->textField($model,'fsn',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ffactory'); ?>
		<?php echo $form->textField($model,'ffactory',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->