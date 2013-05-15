<?php
$this->breadcrumbs=array(
	'Productinfos'=>array('index'),
	$model->fid,
);

$this->menu=array(
	array('label'=>'List Productinfo', 'url'=>array('index')),
	array('label'=>'Create Productinfo', 'url'=>array('create')),
	array('label'=>'Update Productinfo', 'url'=>array('update', 'id'=>$model->fid)),
	array('label'=>'Delete Productinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Productinfo', 'url'=>array('admin')),
);
?>
<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h1>查看产品 <?php echo $model->fproductnm; ?></h1>    
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'fprodcutsn',
		'fproductnm',
		'fsilksp',
		'freedwd',
		'freedsn',
		'freedlen',
		'ftotallen',
		'fweave',
		'ftype',
		'flevel',
		'fplspeed',
		'fpleffect',
		'fchaineid',
		'fweftid',
		'finfo',
		'fstatus',
	),
)); ?>
