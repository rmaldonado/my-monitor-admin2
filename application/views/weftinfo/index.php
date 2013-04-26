<?php
$this->breadcrumbs=array(
	'Weftinfos',
);

$this->menu=array(
	array('label'=>'Create Weftinfo', 'url'=>array('create')),
	array('label'=>'Manage Weftinfo', 'url'=>array('admin')),
);
?>

<h1>Weftinfos</h1>


<?php 

$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'fid', 'header'=>'#'),
        array('name'=>'fdensity', 'header'=>'First name'),
        array('name'=>'fcycle', 'header'=>'Last name'),
        array('name'=>'fnumber', 'header'=>'Language'),
        array('name'=>'flnumber', 'header'=>'Language'),
        array('name'=>'fquota', 'header'=>'Language'),
        array('name'=>'fspinfo', 'header'=>'Language'),
        array('name'=>'frate', 'header'=>'Language'),
        array('name'=>'flotnum', 'header'=>'Language'),
        array('name'=>'fsn', 'header'=>'Language'),
        array('name'=>'ffactory', 'header'=>'Language'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 

?>


