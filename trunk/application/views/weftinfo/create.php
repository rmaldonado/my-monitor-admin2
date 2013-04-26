<?php
$this->breadcrumbs=array(
	'Weftinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Weftinfo', 'url'=>array('index')),
	array('label'=>'Manage Weftinfo', 'url'=>array('admin')),
);
?>

<h1>Create Weftinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>