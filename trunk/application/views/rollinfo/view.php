<?php
$this->breadcrumbs=array(
	'Rollinfos'=>array('index'),
	$model->fid,
);

$this->menu=array(
	array('label'=>'List Rollinfo', 'url'=>array('index')),
	array('label'=>'Create Rollinfo', 'url'=>array('create')),
	array('label'=>'Update Rollinfo', 'url'=>array('update', 'id'=>$model->fid)),
	array('label'=>'Delete Rollinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rollinfo', 'url'=>array('admin')),
);
?>

<h1>View Rollinfo #<?php echo $model->fid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'frollno',
		'frollgrp',
		'freednum',
		'fhealdnum',
		'ftension',
		'fsnum',
		'frpm',
		'feffect',
		'fsilktype',
		'flasttime',
		'flastoperator',
		'frolltime',
		'frolloperator',
		'fpltime',
		'frealtime',
		'frealoperator',
		'fproductid',
		'fchaineid',
		'fweftid',
		'forderid',
		'fpcardno',
		'fmemo',
	),
)); ?>
