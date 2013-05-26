<div class="page-header">
    <h1>上轴信息管理</h1>    
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
     'filter'=>$dataProvider->model,  
    //'template'=>"{items}",
    'template'=>'{summary}{items}{pager}', 
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
</div>