
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php /** @var BootActiveForm $form */

$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    //'id'=>'horizontalForm',
    'type'=>'horizontal',
)); 

?>

<div class="row-fluid">
	<div class="span6">
<fieldset>
<legend>Rollinfo</legend>
<?php
echo $form->textFieldRow($model, 'frollno');
echo $form->textFieldRow($model, 'frollgrp');
echo $form->textFieldRow($model, 'freednum');
echo $form->textFieldRow($model, 'fhealdnum');
echo $form->textFieldRow($model, 'ftension');
echo $form->textFieldRow($model, 'fsnum');
echo $form->textFieldRow($model, 'frpm');
echo $form->textFieldRow($model, 'feffect');
echo $form->textFieldRow($model, 'fsilktype');
?>
</fieldset>			
	</div>
	<div class="span6">
		
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
<fieldset>
<legend>Chaineinfo</legend>
<?php
echo $form->textFieldRow($model->asa('fchaine'), 'fnumber');
echo $form->textFieldRow($model->fchaine, 'fdensity');
echo $form->textFieldRow($model->fchaine, 'fminirate');
echo $form->textFieldRow($model->fchaine, 'fquota');
echo $form->textFieldRow($model->fchaine, 'fspinfo');
echo $form->textFieldRow($model->fchaine, 'frate');
echo $form->textFieldRow($model->fchaine, 'flotnum');
echo $form->textFieldRow($model->fchaine, 'fsn');
echo $form->textFieldRow($model->fchaine, 'ffactory');
?>
</fieldset>		
	</div>
	<div class="span6">
<fieldset>
<legend>Weftinfo</legend>
<?php
echo $form->textFieldRow($model->fweft, 'fdensity');
echo $form->textFieldRow($model->fweft, 'fcycle');
echo $form->textFieldRow($model->fweft, 'fnumber');
echo $form->textFieldRow($model->fweft, 'flnumber');
echo $form->textFieldRow($model->fweft, 'fquota');
echo $form->textFieldRow($model->fweft, 'fspinfo');
echo $form->textFieldRow($model->fweft, 'frate');
echo $form->textFieldRow($model->fweft, 'flotnum');
echo $form->textFieldRow($model->fweft, 'fsn');
echo $form->textFieldRow($model->fweft, 'ffactory');
?>
</fieldset>		
	</div>
</div>

<div class="form-actions">
<?php
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=> ($model->isNewRecord ? 'Create' : 'Save'))); 
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset'));
?>
</div>

<?php
$this->endWidget();

?>






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