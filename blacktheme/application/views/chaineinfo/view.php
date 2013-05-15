<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h1>查看经纱 <?php echo $model->fid; ?></h1>    
</div>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'fnumber',
		'fdensity',
		'fminirate',
		'fquota',
		'fspinfo',
		'frate',
		'flotnum',
		'fsn',
		'ffactory',
	),
)); ?>
