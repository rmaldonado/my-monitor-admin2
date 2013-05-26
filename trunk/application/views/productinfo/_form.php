

<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php /** @var BootActiveForm $form */

$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    //'id'=>'horizontalForm',
    'type'=>'horizontal',
)); 

?>
<?php echo $form->errorSummary($model); ?>
<div class="row-fluid">
	<div class="span6">
<fieldset>
<legend>产品信息</legend>
<?php
echo $form->textFieldRow($model, 'fprodcutsn');
echo $form->textFieldRow($model, 'fproductnm');
echo $form->textFieldRow($model, 'fsilksp');
echo $form->textFieldRow($model, 'freedwd');
echo $form->textFieldRow($model, 'freedsn');
echo $form->textFieldRow($model, 'freedlen');
echo $form->textFieldRow($model, 'ftotallen');
echo $form->textFieldRow($model, 'fweave');
echo $form->textFieldRow($model, 'ftype');
echo $form->textFieldRow($model, 'flevel');
echo $form->textFieldRow($model, 'fplspeed');
echo $form->textFieldRow($model, 'fpleffect');
?>
</fieldset>			
	</div>
	<div class="span6">
		<fieldset>
		<legend>其他信息</legend>
<?php
echo $form->textFieldRow($model, 'finfo');
echo $form->dropDownListRow($model, 'fstatus', array('关闭', '启用' ));
?>
		</fieldset>
	</div>
</div>

<div class="row-fluid">
	<div class="span6">
<fieldset>
<legend>经纱信息</legend>
<?php
$this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'button', 
		'label'=>'选择经纱',
		'htmlOptions' => array(
			'id'=>'btn-select-chaineinfo'
		)));
echo $form->hiddenField($model, 'fchaineid', array('id'=>'fchaineid'));

?>
<div id="chaineinfo_detail">
<?php
$fc = array("fnumber"=>"总经根数",
			"fdensity"=>"经纱密度",
			"fminirate"=>"经缩率（%）",
			"fquota"=>"经纱定额",
			"fspinfo"=>"经纱规格",
			"frate"=>"经纱比例",
			"flotnum"=>"经纱号数",
			"fsn"=>"经纱批号",
			"ffactory"=>"经纱厂家");
if ($model->fchaine) {
	foreach ($fc as $key => $name) {
		echo $name;
		echo ' : ';
		echo $model->fchaine->{$key};
		echo '<br/>';
	}
}
?>			
</div>
</fieldset>		
	</div>
	<div class="span6">
<fieldset>
<legend>纬纱信息</legend>
<?php
$this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'button', 
		'label'=>'选择纬纱',
		'htmlOptions' => array(
			'id'=>'btn-select-weftinfo'
		)));
echo $form->hiddenField($model, 'fweftid', array('id'=>'fweftid'));

?>
<div id="weftinfo_detail">
<?php
$fw = array("fdensity" => "维密",
			"fcycle" => "周期转数",
			"fnumber" => "周期纬纱",
			"flnumber" => "纬纱编号",
			"fquota" => "纬纱定额",
			"fspinfo" => "纬纱规格",
			"frate" => "纬纱比例",
			"flotnum" => "纬纱号数",
			"fsn" => "纬纱批号",
			"ffactory" => "纬纱厂家");
if ($model->fweft) {
	foreach ($fw as $key => $name) {
		echo $name;
		echo ' : ';
		echo $model->fweft->{$key};
		echo '<br/>';
	}
}
?>	
</div>
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
<div id="dialog-select-chaineinfo"></div>
<div id="dialog-select-weftinfo"></div>


<?php

$weft_index = $this->createUrl('weftinfo/select');
$chaine_index = $this->createUrl('chaineinfo/select');
$code = '

	$("#btn-select-weftinfo").click(function (e) {
		console.log("#select-weftinfo");
		var url = "'.$weft_index.'";
		var d = $("#dialog-select-weftinfo");
		//var b = $(".modal-body", d).load(url);
		d.empty();
		d.load(url);
		d.dialog({autoOpen: false, modal: true}).dialog("open");
	});

	$("#btn-select-chaineinfo").click(function(e) {
		var url = "'.$chaine_index.'";
		var d = $("#dialog-select-chaineinfo");
		//var b = $(".modal-body", d).load(url);
		//d.modal();
		d.empty();
		d.load(url);
		d.dialog({autoOpen: false, modal: true}).dialog("open");
	});
	

	$("#dialog-select-chaineinfo").delegate(".chaine-item", "click", function (e) {
		var $this = $(this);
		var data = JSON.parse($this.attr("data-row"));
		console.log(data);
		$("#fchaineid").val(data["fid"]);
		var html = "";
		
		var fsm='.CJSON::encode($fc).';
		/*var fsm = {
			"fnumber":"总经根数",
			"fdensity":"经纱密度",
			"fminirate":"经缩率（%）",
			"fquota":"经纱定额",
			"fspinfo":"经纱规格",
			"frate":"经纱比例",
			"flotnum":"经纱号数",
			"fsn":"经纱批号",
			"ffactory":"经纱厂家"
		};*/

		for(var key in fsm) {
			html += fsm[key] + " : " + data[key] + "<br/>";
		}
		$("#chaineinfo_detail").html(html);

		$("#dialog-select-chaineinfo").dialog("close");
	});	
	$("#dialog-select-weftinfo").delegate(".weft-item", "click", function (e) {
		var $this = $(this);
		var data = JSON.parse($this.attr("data-row"));
		console.log(data);
		$("#fweftid").val(data["fid"]);
		var html = "";
		
		var fsm='.CJSON::encode($fw).';
		/*var fsm = {
			"fdensity": "维密",
			"fcycle": "周期转数",
			"fnumber": "周期纬纱",
			"flnumber": "纬纱编号",
			"fquota": "纬纱定额",
			"fspinfo": "纬纱规格",
			"frate": "纬纱比例",
			"flotnum": "纬纱号数",
			"fsn": "纬纱批号",
			"ffactory": "纬纱厂家"
		};*/

		for(var key in fsm) {
			html += fsm[key] + " : " + data[key] + "<br/>";
		}
		$("#weftinfo_detail").html(html);
		$("#dialog-select-weftinfo").dialog("close");
	});

';
$cs=Yii::app()->clientScript;  
$cs->registerScript('productinfo-select', $code, CClientScript::POS_READY);


?>

