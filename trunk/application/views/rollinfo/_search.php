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
		<?php echo $form->label($model,'frollno'); ?>
		<?php echo $form->textField($model,'frollno',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frollgrp'); ?>
		<?php echo $form->textField($model,'frollgrp',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'freednum'); ?>
		<?php echo $form->textField($model,'freednum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fhealdnum'); ?>
		<?php echo $form->textField($model,'fhealdnum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ftension'); ?>
		<?php echo $form->textField($model,'ftension',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fsnum'); ?>
		<?php echo $form->textField($model,'fsnum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frpm'); ?>
		<?php echo $form->textField($model,'frpm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'feffect'); ?>
		<?php echo $form->textField($model,'feffect'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fsilktype'); ?>
		<?php echo $form->textField($model,'fsilktype',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flasttime'); ?>
		<?php echo $form->textField($model,'flasttime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flastoperator'); ?>
		<?php echo $form->textField($model,'flastoperator',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frolltime'); ?>
		<?php echo $form->textField($model,'frolltime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frolloperator'); ?>
		<?php echo $form->textField($model,'frolloperator',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fpltime'); ?>
		<?php echo $form->textField($model,'fpltime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frealtime'); ?>
		<?php echo $form->textField($model,'frealtime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frealoperator'); ?>
		<?php echo $form->textField($model,'frealoperator',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fproductid'); ?>
		<?php echo $form->textField($model,'fproductid',array('size'=>11,'maxlength'=>11)); ?>
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
		<?php echo $form->label($model,'forderid'); ?>
		<?php echo $form->textField($model,'forderid',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fpcardno'); ?>
		<?php echo $form->textField($model,'fpcardno',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fmemo'); ?>
		<?php echo $form->textField($model,'fmemo',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->