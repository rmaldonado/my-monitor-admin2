<?php
$this->breadcrumbs=array(
	'Productinfos'=>array('index'),
	$model->fid=>array('view','id'=>$model->fid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productinfo', 'url'=>array('index')),
	array('label'=>'Create Productinfo', 'url'=>array('create')),
	array('label'=>'View Productinfo', 'url'=>array('view', 'id'=>$model->fid)),
	array('label'=>'Manage Productinfo', 'url'=>array('admin')),
);
?>

<h1>Update Productinfo <?php echo $model->fid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>