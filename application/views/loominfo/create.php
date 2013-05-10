<?php
$this->breadcrumbs=array(
	'Loominfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Loominfo','url'=>array('index')),
	array('label'=>'Manage Loominfo','url'=>array('admin')),
);
?>

<h1>Create Loominfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>