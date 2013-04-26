<?php
$this->breadcrumbs=array(
	'Rollinfos'=>array('index'),
	$model->fid=>array('view','id'=>$model->fid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rollinfo', 'url'=>array('index')),
	array('label'=>'Create Rollinfo', 'url'=>array('create')),
	array('label'=>'View Rollinfo', 'url'=>array('view', 'id'=>$model->fid)),
	array('label'=>'Manage Rollinfo', 'url'=>array('admin')),
);
?>

<h1>Update Rollinfo <?php echo $model->fid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>