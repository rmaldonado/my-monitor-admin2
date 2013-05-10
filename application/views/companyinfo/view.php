<?php
$this->breadcrumbs=array(
	'Companyinfos'=>array('index'),
	$model->fid,
);

$this->menu=array(
	array('label'=>'List Companyinfo', 'url'=>array('index')),
	array('label'=>'Create Companyinfo', 'url'=>array('create')),
	array('label'=>'Update Companyinfo', 'url'=>array('update', 'id'=>$model->fid)),
	array('label'=>'Delete Companyinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Companyinfo', 'url'=>array('admin')),
);
?>

<h1>View Companyinfo #<?php echo $model->fid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'fname',
		'faddress',
		'floomnum',
		'fdepartnum',
		'finfo',
		'fcreatetm',
		'fstatus',
	),
)); ?>
