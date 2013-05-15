<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h1>纬纱管理</h1>    
</div>

<div class="block">
<div class="head orange">
    <h2>&nbsp;</h2>
    <ul class="buttons">
        <li><a href="<?php echo $this->createUrl('create'); ?>"><div class="icon"><span class="ico-plus"></span></div></a></li>
                <!--li><a class="ublock" data="/loom/site/product" href="#"><div class="icon"><span class="ico-undo"></span></div></a></li>
                <li><a class="cblock" href="#"><div class="icon"><span class="ico-sort"></span></div></a></li-->
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
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 

?>
</div>
</div>

