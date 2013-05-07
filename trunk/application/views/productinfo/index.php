<?php
$this->breadcrumbs=array(
	'Productinfos',
);

$this->menu=array(
	array('label'=>'Create Productinfo', 'url'=>array('create')),
	array('label'=>'Manage Productinfo', 'url'=>array('admin')),
);
?>


<div class="block">
<div class="head orange">
    <h2>Productinfos</h2>
    <ul class="buttons">
                <li><a onclick="source('table_main'); return false;" href="#"><div class="icon"><span class="ico-info"></span></div></a></li>
                <li><a class="ublock" data="/loom/site/product" href="#"><div class="icon"><span class="ico-undo"></span></div></a></li>
                <li><a class="cblock" href="#"><div class="icon"><span class="ico-sort"></span></div></a></li>
    </ul>   
</div>
<div class="data-fluid">
<?php 

$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'fid', 'header'=>'#'),
        array('name'=>'fprodcutsn'),
        array('name'=>'fproductnm'),
        array('name'=>'fsilksp'),
        array('name'=>'freedwd'),
        array('name'=>'freedsn'),
        array('name'=>'freedlen'),
        array('name'=>'ftotallen'),
        array('name'=>'fweave'),
        array('name'=>'ftype'),
        array('name'=>'flevel'),
        array('name'=>'fplspeed'),
        array('name'=>'fpleffect'),        
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 

?>
</div>