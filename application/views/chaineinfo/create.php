<?php
$this->breadcrumbs=array(
	'Chaineinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Chaineinfo', 'url'=>array('index')),
	array('label'=>'Manage Chaineinfo', 'url'=>array('admin')),
);
?>

<h1>Create Chaineinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>