<?php
$this->breadcrumbs=array(
	'Companyinfos',
);

$this->menu=array(
	array('label'=>'Create Companyinfo', 'url'=>array('create')),
	array('label'=>'Manage Companyinfo', 'url'=>array('admin')),
);
?>

<h1>Companyinfos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
