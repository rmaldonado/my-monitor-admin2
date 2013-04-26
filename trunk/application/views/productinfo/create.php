<?php
$this->breadcrumbs=array(
	'Productinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Productinfo', 'url'=>array('index')),
	array('label'=>'Manage Productinfo', 'url'=>array('admin')),
);
?>

<h1>Create Productinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>