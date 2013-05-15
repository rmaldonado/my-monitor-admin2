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
		<?php echo $form->label($model,'fprodcutsn'); ?>
		<?php echo $form->textField($model,'fprodcutsn',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fproductnm'); ?>
		<?php echo $form->textField($model,'fproductnm',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fsilksp'); ?>
		<?php echo $form->textField($model,'fsilksp',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'freedwd'); ?>
		<?php echo $form->textField($model,'freedwd',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'freedsn'); ?>
		<?php echo $form->textField($model,'freedsn',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'freedlen'); ?>
		<?php echo $form->textField($model,'freedlen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ftotallen'); ?>
		<?php echo $form->textField($model,'ftotallen',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fweave'); ?>
		<?php echo $form->textField($model,'fweave',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ftype'); ?>
		<?php echo $form->textField($model,'ftype',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flevel'); ?>
		<?php echo $form->textField($model,'flevel',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fplspeed'); ?>
		<?php echo $form->textField($model,'fplspeed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fpleffect'); ?>
		<?php echo $form->textField($model,'fpleffect'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fchaineid'); ?>
		<?php echo $form->textField($model,'fchaineid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fweftid'); ?>
		<?php echo $form->textField($model,'fweftid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'finfo'); ?>
		<?php echo $form->textField($model,'finfo',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fstatus'); ?>
		<?php echo $form->textField($model,'fstatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->