<?php
$this->breadcrumbs=array(
	'Rollinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rollinfo', 'url'=>array('index')),
	array('label'=>'Manage Rollinfo', 'url'=>array('admin')),
);
?>

<h1>Create Rollinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>