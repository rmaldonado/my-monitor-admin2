<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h1>上轴信息管理</h1>    
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
     'filter'=>$dataProvider->model,  
    'template'=>"{items}",
    'columns'=>array(
            array('name'=>'fid'),
            array('name'=>'frollno'),
            array('name'=>'frollgrp'),
            array('name'=>'freednum'),
            array('name'=>'fhealdnum'),
            array('name'=>'ftension'),
            array('name'=>'fsnum'),
            array('name'=>'frpm'),
            array('name'=>'feffect'),
            array('name'=>'fsilktype'),
            array('name'=>'flasttime'),
            array('name'=>'flastoperator'),
            array('name'=>'frolltime'),
            array('name'=>'frolloperator'),
            array('name'=>'fpltime'),
            array('name'=>'frealtime'),
            array('name'=>'frealoperator'),
            array('name'=>'fproductid'),
            array('name'=>'fchaineid'),
            array('name'=>'fweftid'),
            array('name'=>'forderid'),
            array('name'=>'fpcardno'),
            //array('name'=>'fmemo'),
            array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'htmlOptions'=>array('style'=>'width: 50px'),
            ),
    ),
)); 


?>
</div>
</div>