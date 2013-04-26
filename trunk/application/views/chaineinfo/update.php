<?php
$this->breadcrumbs=array(
	'Chaineinfos'=>array('index'),
	$model->fid=>array('view','id'=>$model->fid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Chaineinfo', 'url'=>array('index')),
	array('label'=>'Create Chaineinfo', 'url'=>array('create')),
	array('label'=>'View Chaineinfo', 'url'=>array('view', 'id'=>$model->fid)),
	array('label'=>'Manage Chaineinfo', 'url'=>array('admin')),
);
?>

<h1>Update Chaineinfo <?php echo $model->fid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>