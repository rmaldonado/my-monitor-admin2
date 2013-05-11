<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h1>查看公司 <?php echo $model->fname; ?></h1>    
</div>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'fname',
		'faddress',
		'floomnum',
		'fdepartnum',
		'finfo',
		'fcreatetm',
		'fstatus',
	),
)); ?>
