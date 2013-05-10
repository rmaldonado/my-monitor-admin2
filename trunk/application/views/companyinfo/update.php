<?php
$this->breadcrumbs=array(
	'Companyinfos'=>array('index'),
	$model->fid=>array('view','id'=>$model->fid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Companyinfo', 'url'=>array('index')),
	array('label'=>'Create Companyinfo', 'url'=>array('create')),
	array('label'=>'View Companyinfo', 'url'=>array('view', 'id'=>$model->fid)),
	array('label'=>'Manage Companyinfo', 'url'=>array('admin')),
);
?>

<h1>Update Companyinfo <?php echo $model->fid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>