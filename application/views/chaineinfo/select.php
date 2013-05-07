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

$columns = array(
    array('name'=>'fid', 'header'=>'#'),
    array('name'=>'fnumber', 'header'=>'总经根数'),
    array('name'=>'fdensity', 'header'=>'经纱密度'),
    array('name'=>'fminirate', 'header'=>'经缩率（%）'),
    array('name'=>'fquota', 'header'=>'经纱定额'),
    array('name'=>'fspinfo', 'header'=>'经纱规格'),
    array('name'=>'frate', 'header'=>'经纱比例'),
    array('name'=>'flotnum', 'header'=>'经纱号数'),
    array('name'=>'fsn', 'header'=>'经纱批号'),
    array('name'=>'ffactory', 'header'=>'经纱厂家')
);

?>

<div class="block">
<div class="head orange">
	<h2>Chaineinfos</h2>
	<ul class="buttons">
                <li><a onclick="source('table_main'); return false;" href="#"><div class="icon"><span class="ico-info"></span></div></a></li>
                <li><a class="ublock" data="/loom/site/product" href="#"><div class="icon"><span class="ico-undo"></span></div></a></li>
                <li><a class="cblock" href="#"><div class="icon"><span class="ico-sort"></span></div></a></li>
    </ul>	
</div>
<div class="data-fluid">
<table class=" table lcnp table-striped table-bordered table-condensed">
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
    echo "<td><button data-row='".CJSON::encode($row)."' class='chaine-item'>选择</button></td>";
    echo "</tr>";
}



?>
</tbody>
</table>
</div>
</div>