<?php
$this->breadcrumbs=array(
	'Productinfos',
);

$this->menu=array(
	array('label'=>'Create Productinfo', 'url'=>array('create')),
	array('label'=>'Manage Productinfo', 'url'=>array('admin')),
);
?>

<h1>Productinfos</h1>

<?php 

$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'fid', 'header'=>'#'),
        array('name'=>'fnumber', 'header'=>'总经根数'),
        array('name'=>'fdensity', 'header'=>'经纱密度'),
        array('name'=>'fminirate', 'header'=>'经缩率（%）'),
        array('name'=>'fquota', 'header'=>'经纱定额'),
        array('name'=>'fspinfo', 'header'=>'经纱规格'),
        array('name'=>'frate', 'header'=>'经纱比例'),
        array('name'=>'flotnum', 'header'=>'经纱号数'),
        array('name'=>'fsn', 'header'=>'经纱批号'),
        array('name'=>'ffactory', 'header'=>'经纱厂家'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 

?>