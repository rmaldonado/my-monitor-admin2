<?php
$this->breadcrumbs=array(
	'Rollinfos',
);

$this->menu=array(
	array('label'=>'Create Rollinfo', 'url'=>array('create')),
	array('label'=>'Manage Rollinfo', 'url'=>array('admin')),
);
?>

<h1>Rollinfos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
