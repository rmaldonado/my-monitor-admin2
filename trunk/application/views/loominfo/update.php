<?php
$this->breadcrumbs=array(
	'Loominfos'=>array('index'),
	$model->fid=>array('view','id'=>$model->fid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Loominfo', 'url'=>array('index')),
	array('label'=>'Create Loominfo', 'url'=>array('create')),
	array('label'=>'View Loominfo', 'url'=>array('view', 'id'=>$model->fid)),
	array('label'=>'Manage Loominfo', 'url'=>array('admin')),
);
?>

<h1>Update Loominfo <?php echo $model->fid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>