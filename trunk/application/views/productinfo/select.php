<?php
// $this->breadcrumbs=array(
// 	'Chaineinfos',
// );

// $this->menu=array(
// 	array('label'=>'Create Chaineinfo', 'url'=>array('create')),
// 	array('label'=>'Manage Chaineinfo', 'url'=>array('admin')),
// );
?>


<?php 

// $this->widget('bootstrap.widgets.TbGridView', array(
//     'type'=>'striped bordered condensed',
//     'dataProvider'=>$dataProvider,
//     'template'=>"{items}",
//     'columns'=>array(
//         array('name'=>'fid', 'header'=>'#'),
//         array('name'=>'fnumber', 'header'=>'总经根数'),
//         array('name'=>'fdensity', 'header'=>'经纱密度'),
//         array('name'=>'fminirate', 'header'=>'经缩率（%）'),
//         array('name'=>'fquota', 'header'=>'经纱定额'),
//         array('name'=>'fspinfo', 'header'=>'经纱规格'),
//         array('name'=>'frate', 'header'=>'经纱比例'),
//         array('name'=>'flotnum', 'header'=>'经纱号数'),
//         array('name'=>'fsn', 'header'=>'经纱批号'),
//         array('name'=>'ffactory', 'header'=>'经纱厂家'),
//         array(
//             'class' => 'CDataColumn',
//             'name' => 'fid'
//         ),
//         /*array(
//             'class'=>'bootstrap.widgets.TbButtonColumn',
//             'htmlOptions'=>array('style'=>'width: 50px'),
//         ),*/
//     ),
// )); 
$columns=array(
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
        array('name'=>'fpleffect')
);
?>
<div class="widget-box">
<div class="widget-header">
    <h5 class="bigger lighter">&nbsp;</h5>
    <div class="widget-toolbar widget-toolbar-light">
        <a class="btn" href="<?php echo $this->createUrl('create'); ?>"><i class="icon-pencil"></i>新增</a>
                <!--li><a class="ublock" data="/loom/site/product" href="#"><div class="icon"><span class="ico-undo"></span></div></a></li>
                <li><a class="cblock" href="#"><div class="icon"><span class="ico-sort"></span></div></a></li-->
    </div>  
</div>
<div class="widget-body">
    <div class="widget-main no-padding">
<table class=" table table-striped table-bordered table-condensed">
<thead>
	<tr>
<?php
$model = $dataProvider->model;
$cn = count($columns);
for ($i=0; $i < $cn; $i++) { 
	echo "<td>";
	$name = $columns[$i]['name'];
	echo $model->getAttributeLabel($name);
	echo "</td>";
}

?>    	<td>&nbsp;</td>
	</tr>        
</thead>
</tbody>
<?php

$data=$dataProvider->getData();
$n = count($data);
for ($j=0; $j < $n; $j++) { 
    $row = $data[$j];
    echo "<tr>";
    for ($i=0; $i < $cn; $i++) { 
    //foreach ($row as $key => $value) {
    	$name = $columns[$i]['name'];
    	$value = $row->getAttribute($name);    	
        echo "<td>";
        echo $value;
        echo "</td>";
    }

    //echo "<td><button data-row='".CJSON::encode($row)."' class='product-item'>选择</button></td>";
    echo '<td><button class="btn btn-mini btn-info product-item" data-row=\''.CJSON::encode($row).'\'><i class="icon-check"></i></button></td>';
    echo "</tr>";
}



?>
</tbody>
</table>
    </div>
</div>
</div>