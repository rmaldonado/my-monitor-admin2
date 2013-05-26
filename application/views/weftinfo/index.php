<div class="page-header">
    <h1>纬纱管理</h1>    
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
    'template'=>'<div class="row-fluid"><div class="span6">{summary}</div><div class="span6">SEARCH</div></div>{items}{pager}', 
    'columns'=>array(
        array('name'=>'fid', 'header'=>'#'),
        array('name'=>'fdensity'),
        array('name'=>'fcycle'),
        array('name'=>'fnumber'),
        array('name'=>'flnumber'),
        array('name'=>'fquota'),
        array('name'=>'fspinfo'),
        array('name'=>'frate'),
        array('name'=>'flotnum'),
        array('name'=>'fsn'),
        array('name'=>'ffactory'),
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