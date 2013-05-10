<?php
$this->breadcrumbs=array(
	'Companyinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Companyinfo','url'=>array('index')),
	array('label'=>'Manage Companyinfo','url'=>array('admin')),
);
?>

<h1>Create Companyinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>