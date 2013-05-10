<?php
$this->breadcrumbs=array(
	'Loominfos'=>array('index'),
	$model->fid,
);

$this->menu=array(
	array('label'=>'List Loominfo', 'url'=>array('index')),
	array('label'=>'Create Loominfo', 'url'=>array('create')),
	array('label'=>'Update Loominfo', 'url'=>array('update', 'id'=>$model->fid)),
	array('label'=>'Delete Loominfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Loominfo', 'url'=>array('admin')),
);
?>

<h1>View Loominfo #<?php echo $model->fid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'floomsn',
		'floomid',
		'floomx',
		'floomy',
		'fcompanyid',
		'frepeaterid',
		'fgatherid',
		'fstatus',
		'frollid',
		'floominfo',
	),
)); ?>
