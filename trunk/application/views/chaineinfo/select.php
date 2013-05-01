<?php
// $this->breadcrumbs=array(
// 	'Chaineinfos',
// );

// $this->menu=array(
// 	array('label'=>'Create Chaineinfo', 'url'=>array('create')),
// 	array('label'=>'Manage Chaineinfo', 'url'=>array('admin')),
// );
?>

<h1>Chaineinfos</h1>


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
    echo "<td><button data-row='".CJSON::encode($row)."' class='chaine-item'>选择</button></td>";
    echo "</tr>";
}



?>
</tbody>
</table>