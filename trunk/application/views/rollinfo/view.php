<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h1>查看上轴信息 <?php echo $model->frollno; ?></h1>    
</div>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'frollno',
		'frollgrp',
		'freednum',
		'fhealdnum',
		'ftension',
		'fsnum',
		'frpm',
		'feffect',
		'fsilktype',
		'flasttime',
		'flastoperator',
		'frolltime',
		'frolloperator',
		'fpltime',
		'frealtime',
		'frealoperator',
		'fproductid',
		'fchaineid',
		'fweftid',
		'forderid',
		'fpcardno',
		'fmemo',
	),
)); ?>
