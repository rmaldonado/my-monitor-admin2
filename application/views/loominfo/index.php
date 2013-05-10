<?php
$this->breadcrumbs=array(
	'Loominfos',
);

$this->menu=array(
	array('label'=>'Create Loominfo', 'url'=>array('create')),
	array('label'=>'Manage Loominfo', 'url'=>array('admin')),
);
?>

<h1>Loominfos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
