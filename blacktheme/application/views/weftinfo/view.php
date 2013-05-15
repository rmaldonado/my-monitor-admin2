<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h1>查看纬纱信息 <?php echo $model->fid; ?></h1>    
</div>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'fdensity',
		'fcycle',
		'fnumber',
		'flnumber',
		'fquota',
		'fspinfo',
		'frate',
		'flotnum',
		'fsn',
		'ffactory',
	),
)); ?>
