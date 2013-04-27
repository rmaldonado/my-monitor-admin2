
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
$this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'button', 
		'label' => 'Select Chaineinfo',
		'htmlOptions' => array(
			'id' => 'select-chaineinfo'
		)));
// echo $form->textFieldRow($fchaine, 'fnumber');
// echo $form->textFieldRow($fchaine, 'fdensity');
// echo $form->textFieldRow($fchaine, 'fminirate');
// echo $form->textFieldRow($fchaine, 'fquota');
// echo $form->textFieldRow($fchaine, 'fspinfo');
// echo $form->textFieldRow($fchaine, 'frate');
// echo $form->textFieldRow($fchaine, 'flotnum');
// echo $form->textFieldRow($fchaine, 'fsn');
// echo $form->textFieldRow($fchaine, 'ffactory');
?>
</fieldset>		
	</div>
	<div class="span6">
<fieldset>
<legend>Weftinfo</legend>
<?php
$this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'button', 
		'label' => 'Select Weftinfo',
		'htmlOptions' => array(
			'id' => 'select-weftinfo'
		)));
// echo $form->textFieldRow($fweft, 'fdensity');
// echo $form->textFieldRow($fweft, 'fcycle');
// echo $form->textFieldRow($fweft, 'fnumber');
// echo $form->textFieldRow($fweft, 'flnumber');
// echo $form->textFieldRow($fweft, 'fquota');
// echo $form->textFieldRow($fweft, 'fspinfo');
// echo $form->textFieldRow($fweft, 'frate');
// echo $form->textFieldRow($fweft, 'flotnum');
// echo $form->textFieldRow($fweft, 'fsn');
// echo $form->textFieldRow($fweft, 'ffactory');
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

<div id="dialog-select-chaineinfo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>selectChaineinfo</h3>
  </div>
  <div class="modal-body">
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" id="btn-chaineinfo">发布</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
  </div>  
</div>


<div id="dialog-select-weftinfo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>select weftinfo</h3>
  </div>
  <div class="modal-body">
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" id="btn-weftinfo">发布</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
  </div>  
</div>



<?php

$weft_index = $this->createUrl('weftinfo/index');
$chaine_index = $this->createUrl('chaineinfo/index');
$code = '
	$("#select-weftinfo").click(function (e) {
		console.log("#select-weftinfo");
		var url = "'.$weft_index.'";
		var d = $("#dialog-select-weftinfo");
		var b = $(".modal-body", d).load(url);
		d.modal();
	});

	$("#select-chaineinfo").click(function(e) {
		var url = "'.$chaine_index.'";
		var d = $("#dialog-select-chaineinfo");
		var b = $(".modal-body", d).load(url);
		d.modal();
	});

	$(".chaine-item", "#select-chaineinfo").live(function (e) {
		$this = $(this);
		$("#dialog-select-chaineinfo").modal("hide");
	});
';
$cs=Yii::app()->clientScript;  
$cs->registerScript('rollinfo-select', $code, CClientScript::POS_READY);


?>

<script type="text/javascript">


</script>



