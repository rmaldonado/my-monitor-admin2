<?php
$this->breadcrumbs=array(
	'Rollinfos',
);

$this->menu=array(
	array('label'=>'Create Rollinfo', 'url'=>array('create')),
	array('label'=>'Manage Rollinfo', 'url'=>array('admin')),
);
?><?php 

/*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */

?>
<div class="block">
<div class="head orange">
	<h2>Rollinfos</h2>
	<ul class="buttons">
		<li><a href="<?php echo $this->createUrl('create'); ?>"><div class="icon"><span class="ico-plus"></span></div></a></li>
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
    /*'columns'=>array(
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
    ),*/
)); 


?>
</div>
</div>