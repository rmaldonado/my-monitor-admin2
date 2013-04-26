<?php
$this->breadcrumbs=array(
	'Weftinfos'=>array('index'),
	$model->fid,
);

$this->menu=array(
	array('label'=>'List Weftinfo', 'url'=>array('index')),
	array('label'=>'Create Weftinfo', 'url'=>array('create')),
	array('label'=>'Update Weftinfo', 'url'=>array('update', 'id'=>$model->fid)),
	array('label'=>'Delete Weftinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Weftinfo', 'url'=>array('admin')),
);
?>

<h1>View Weftinfo #<?php echo $model->fid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'fdensity',
		'fcycle',
		'fnumber',
		'flnumber',
		'fquota',
		'fspinfo',
		'frate',
		'flotnum',
		'fsn',
		'ffactory',
	),
)); ?>
