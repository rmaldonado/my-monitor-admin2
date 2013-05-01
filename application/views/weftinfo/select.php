<?php
// $this->breadcrumbs=array(
// 	'Weftinfos',
// );

// $this->menu=array(
// 	array('label'=>'Create Weftinfo', 'url'=>array('create')),
// 	array('label'=>'Manage Weftinfo', 'url'=>array('admin')),
// );
?>

<h1>Weftinfos</h1>


<?php 

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

?>


<table class=" table table-striped table-bordered table-condensed">
<thead>
    
</thead>
</tbody>
<?php

$data=$dataProvider->getData();
$n = count($data);
for ($i=0; $i < $n; $i++) { 
    $row = $data[$i];
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    echo "<td><button data-row='".CJSON::encode($row)."' class='weft-item'>选择</button></td>";
    echo "</tr>";
}



?>
</tbody>
</table>

