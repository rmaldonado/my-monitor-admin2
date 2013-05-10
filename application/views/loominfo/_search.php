<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fid'); ?>
		<?php echo $form->textField($model,'fid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'floomsn'); ?>
		<?php echo $form->textField($model,'floomsn',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'floomid'); ?>
		<?php echo $form->textField($model,'floomid',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'floomx'); ?>
		<?php echo $form->textField($model,'floomx'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'floomy'); ?>
		<?php echo $form->textField($model,'floomy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fcompanyid'); ?>
		<?php echo $form->textField($model,'fcompanyid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frepeaterid'); ?>
		<?php echo $form->textField($model,'frepeaterid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fgatherid'); ?>
		<?php echo $form->textField($model,'fgatherid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fstatus'); ?>
		<?php echo $form->textField($model,'fstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frollid'); ?>
		<?php echo $form->textField($model,'frollid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'floominfo'); ?>
		<?php echo $form->textField($model,'floominfo',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
