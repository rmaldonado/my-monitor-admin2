<?php
$this->breadcrumbs=array(
	'Chaineinfos'=>array('index'),
	$model->fid,
);

$this->menu=array(
	array('label'=>'List Chaineinfo', 'url'=>array('index')),
	array('label'=>'Create Chaineinfo', 'url'=>array('create')),
	array('label'=>'Update Chaineinfo', 'url'=>array('update', 'id'=>$model->fid)),
	array('label'=>'Delete Chaineinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Chaineinfo', 'url'=>array('admin')),
);
?>

<h1>View Chaineinfo #<?php echo $model->fid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'fnumber',
		'fdensity',
		'fminirate',
		'fquota',
		'fspinfo',
		'frate',
		'flotnum',
		'fsn',
		'ffactory',
	),
)); ?>
