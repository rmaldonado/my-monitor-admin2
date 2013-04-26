<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rollinfo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'frollno'); ?>
		<?php echo $form->textField($model,'frollno',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'frollno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frollgrp'); ?>
		<?php echo $form->textField($model,'frollgrp',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'frollgrp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'freednum'); ?>
		<?php echo $form->textField($model,'freednum'); ?>
		<?php echo $form->error($model,'freednum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fhealdnum'); ?>
		<?php echo $form->textField($model,'fhealdnum'); ?>
		<?php echo $form->error($model,'fhealdnum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ftension'); ?>
		<?php echo $form->textField($model,'ftension',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ftension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fsnum'); ?>
		<?php echo $form->textField($model,'fsnum'); ?>
		<?php echo $form->error($model,'fsnum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frpm'); ?>
		<?php echo $form->textField($model,'frpm'); ?>
		<?php echo $form->error($model,'frpm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'feffect'); ?>
		<?php echo $form->textField($model,'feffect'); ?>
		<?php echo $form->error($model,'feffect'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fsilktype'); ?>
		<?php echo $form->textField($model,'fsilktype',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'fsilktype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flasttime'); ?>
		<?php echo $form->textField($model,'flasttime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'flasttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flastoperator'); ?>
		<?php echo $form->textField($model,'flastoperator',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'flastoperator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frolltime'); ?>
		<?php echo $form->textField($model,'frolltime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'frolltime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frolloperator'); ?>
		<?php echo $form->textField($model,'frolloperator',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'frolloperator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fpltime'); ?>
		<?php echo $form->textField($model,'fpltime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'fpltime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frealtime'); ?>
		<?php echo $form->textField($model,'frealtime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'frealtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frealoperator'); ?>
		<?php echo $form->textField($model,'frealoperator',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'frealoperator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fproductid'); ?>
		<?php echo $form->textField($model,'fproductid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'fproductid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fchaineid'); ?>
		<?php echo $form->textField($model,'fchaineid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'fchaineid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fweftid'); ?>
		<?php echo $form->textField($model,'fweftid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'fweftid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forderid'); ?>
		<?php echo $form->textField($model,'forderid',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'forderid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fpcardno'); ?>
		<?php echo $form->textField($model,'fpcardno',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'fpcardno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fmemo'); ?>
		<?php echo $form->textField($model,'fmemo',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'fmemo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->