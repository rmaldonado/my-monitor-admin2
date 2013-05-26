
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php /** @var BootActiveForm $form */

$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    //'id'=>'horizontalForm',
    'type'=>'horizontal',
));
//print_r($model);
?>
<?php echo $form->errorSummary($model); ?>
<div class="row-fluid">
	<div class="span6">
<fieldset>
<legend>织轴信息</legend>
<?php
echo $form->textFieldRow($model, 'frollno');
echo $form->textFieldRow($model, 'frollgrp', array());
echo $form->textFieldRow($model, 'freednum');
echo $form->textFieldRow($model, 'fhealdnum');
echo $form->textFieldRow($model, 'ftension');
echo $form->textFieldRow($model, 'fsnum');
echo $form->textFieldRow($model, 'frpm');
echo $form->textFieldRow($model, 'feffect');
echo $form->checkBoxListRow($model, 'fsilktype1', array(1=>'双织轴', 2=>'试织', 4=>'三纬', 8=>'提花', 16=>'双纬'), array('inline'=>true));
?>
</fieldset>
	</div>
	<div class="span6">
		<fieldset>
		<legend>时间人员信息</legend>
<?php
echo $form->textFieldRow($model, 'flasttime');
echo $form->textFieldRow($model, 'flastoperator');
echo $form->textFieldRow($model, 'frolltime');
echo $form->textFieldRow($model, 'frolloperator');
echo $form->textFieldRow($model, 'fpltime');
echo $form->textFieldRow($model, 'frealtime');
echo $form->textFieldRow($model, 'frealoperator');
?>
		</fieldset>
	</div>

</div>
<div class="row-fluid">
	<div class="span6">
		<fieldset>
		<legend>其他信息</legend>
<?php
echo $form->textFieldRow($model, 'forderid');
echo $form->textFieldRow($model, 'fpcardno');
echo $form->textFieldRow($model, 'fmemo');
?>
		</fieldset>
	</div>	
</div>
<div class="row-fluid">
	<div class="span4">
		<fieldset>
		<legend>产品信息</legend>
<?php
$this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'button',
		'label'=>'选择产品',
		'htmlOptions' => array(
			'id'=>'btn-select-productinfo'
		)));
echo $form->hiddenField($model, 'fproductid', array('id'=>'fproductid'));

?>
		<div id="productinfo_detail">
<?php
$fp = array("fprodcutsn"=> "产品代码",
			"fproductnm"=> "产品名称",
			"fsilksp"=> "布匹规格",
			"freedwd"=> "筘幅",
			"freedsn"=> "筘号",
			"freedlen"=> "筘长(CM)",
			"ftotallen"=> "满停长度",
			"fweave"=> "织法",
			"ftype"=> "种类",
			"flevel"=> "难易程度",
			"fplspeed"=> "计划车速(rpm/min)",
			"fpleffect"=> "计划效率",
			"fchaineid"=> "经纱参数代码ID",
			"fweftid"=> "纬纱参数代码ID",
			"finfo"=> "其它备注信息",
			"fstatus"=> "产品有效状态");
if ($model->fproduct) {
	foreach ($fp as $key => $name) {
		echo $name;
		echo ' : ';
		echo $model->fproduct->{$key};
		echo '<br/>';
	}
}
?>	
		</div>
		</fieldset>
	</div>
	<div class="span4">
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
	<div class="span4">
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
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=> ($model->isNewRecord ? '新建' : '保存')));
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset'));
?>
</div>

<?php
$this->endWidget();

?>
<div id="dialog-select-productinfo"></div>
<div id="dialog-select-chaineinfo"></div>

<!-- <div id="dialog-select-chaineinfo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
</div> -->

<div id="dialog-select-weftinfo"></div>
<!-- <div id="dialog-select-weftinfo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
</div> -->



<?php

$product_index = $this->createUrl('productinfo/select');
$weft_index = $this->createUrl('weftinfo/select');
$chaine_index = $this->createUrl('chaineinfo/select');
$product_get = $this->createUrl('productinfo/select');
$weft_get = $this->createUrl('weftinfo/select');
$chaine_get= $this->createUrl('chaineinfo/select');
$code = '
	//$("#jDialog_modal").dialog();
	$("#btn-select-productinfo").click(function (e) {
		console.log("#select-productinfo");
		var url = "'.$product_index.'";
		var d = $("#dialog-select-productinfo");
		d.empty();
		d.load(url);
		d.dialog({autoOpen: false, modal: true}).dialog("open");
	});

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
	$("#dialog-select-productinfo").delegate(".product-item", "click", function (e) {
		var $this = $(this);
		var data = JSON.parse($this.attr("data-row"));
		console.log(data);
		$("#fproductid").val(data["fid"]);
		var html = "";

		var fsm='.CJSON::encode($fp).';
		/*var fsm = {
			"fprodcutsn": "产品代码",
			"fproductnm": "产品名称",
			"fsilksp": "布匹规格",
			"freedwd": "筘幅",
			"freedsn": "筘号",
			"freedlen": "筘长(CM)",
			"ftotallen": "满停长度",
			"fweave": "织法",
			"ftype": "种类",
			"flevel": "难易程度",
			"fplspeed": "计划车速(rpm/min)",
			"fpleffect": "计划效率",
			"fchaineid": "经纱参数代码ID",
			"fweftid": "纬纱参数代码ID",
			"finfo": "其它备注信息",
			"fstatus": "产品有效状态",
		};*/

		for(var key in fsm) {
			html += fsm[key] + " : " + data[key] + "<br/>";
		}
		$("#productinfo_detail").html(html);
		$("#dialog-select-productinfo").dialog("close");
	});
';
$cs=Yii::app()->clientScript;
$cs->registerScript('rollinfo-select', $code, CClientScript::POS_READY);


?>

<script type="text/javascript">


</script>


