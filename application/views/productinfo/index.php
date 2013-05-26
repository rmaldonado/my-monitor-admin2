
<div class="page-header">
    <h1>产品管理 </h1>    
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
            'htmlOptions'=>array('style'=>'width: 100px'),
        ),
    ),
)); 

?>
    </div>
</div>
</div>