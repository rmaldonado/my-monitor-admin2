<?php
// $this->breadcrumbs=array(
// 	'Weftinfos',
// );

// $this->menu=array(
// 	array('label'=>'Create Weftinfo', 'url'=>array('create')),
// 	array('label'=>'Manage Weftinfo', 'url'=>array('admin')),
// );
?><?php 

// if (!function_exists('_data1')) {
//     function _data1($data) {
//         return json_encode($data);
//     }
// }

// $this->widget('bootstrap.widgets.TbGridView', array(
//     'type'=>'striped bordered condensed',
//     'dataProvider'=>$dataProvider,
//     'template'=>"{items}",
//     'columns'=>array(
//         array('name'=>'fid', 'header'=>'#'),
//         array('name'=>'fdensity', 'header'=>'First name'),
//         array('name'=>'fcycle', 'header'=>'Last name'),
//         array('name'=>'fnumber', 'header'=>'Language'),
//         array('name'=>'flnumber', 'header'=>'纬纱编号'),
//         array('name'=>'fquota', 'header'=>'Language'),
//         array('name'=>'fspinfo', 'header'=>'纬纱规格'),
//         array('name'=>'frate', 'header'=>'纬纱比例'),
//         array('name'=>'flotnum', 'header'=>'纬纱号数'),
//         array('name'=>'fsn', 'header'=>'纬纱批号'),
//         array('name'=>'ffactory', 'header'=>'纬纱厂家'),     
//         array(
//             'class'=>'bootstrap.widgets.TbButtonColumn',
//             'template'=>'{select}',  
//             'buttons' => array(
//                 'select' => array(
//                     'label' => '选择',
//                     'url' => '#id={$data["fid"]}',
//                     'click' => 'js:select_weftinfo'
//                 )
//             ),
//             //'htmlOptions'=>array('style'=>'width: 50px'),
//         ),
//     ),
// )); 
$columns = array(
        array('name'=>'fid', 'header'=>'#'),
        array('name'=>'fdensity', 'header'=>'First name'),
        array('name'=>'fcycle', 'header'=>'Last name'),
        array('name'=>'fnumber', 'header'=>'Language'),
        array('name'=>'flnumber', 'header'=>'纬纱编号'),
        array('name'=>'fquota', 'header'=>'Language'),
        array('name'=>'fspinfo', 'header'=>'纬纱规格'),
        array('name'=>'frate', 'header'=>'纬纱比例'),
        array('name'=>'flotnum', 'header'=>'纬纱号数'),
        array('name'=>'fsn', 'header'=>'纬纱批号'),
        array('name'=>'ffactory', 'header'=>'纬纱厂家')
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
<table class="table lcnp table-striped table-bordered table-condensed">
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
    //echo "<td><button data-row='".CJSON::encode($row)."' class='weft-item'>选择</button></td>";
    echo '<td><button class="btn btn-mini btn-info weft-item" data-row=\''.CJSON::encode($row).'\'><i class="icon-check"></i></button></td>';
    echo "</tr>";
}



?>
</tbody>
</table>
    </div>
</div>
</div>