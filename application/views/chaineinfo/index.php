
<div class="page-header">
    <h1>经纱管理</h1>    
</div>

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
<?php 

$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    //'template'=>"{items}",
    'template'=>'{summary}{items}{pager}', 
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
            'htmlOptions'=>array('style'=>'width: 100px'),
        ),
    ),
)); 

?>
    </div>
</div>
</div>