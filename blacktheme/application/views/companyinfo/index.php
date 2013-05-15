

<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h1>公司管理</h1>    
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
        array('name'=>'fname'),
        array('name'=>'faddress'),
        array('name'=>'floomnum'),
        array('name'=>'fdepartnum'),
        array('name'=>'finfo'),
        array('name'=>'fcreatetm'),
        array('name'=>'fstatus'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 

?>
</div>
</div>