<?php
$this->breadcrumbs=array(
	'Weftinfos'=>array('index'),
	$model->fid=>array('view','id'=>$model->fid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Weftinfo', 'url'=>array('index')),
	array('label'=>'Create Weftinfo', 'url'=>array('create')),
	array('label'=>'View Weftinfo', 'url'=>array('view', 'id'=>$model->fid)),
	array('label'=>'Manage Weftinfo', 'url'=>array('admin')),
);
?>

<h1>Update Weftinfo <?php echo $model->fid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>