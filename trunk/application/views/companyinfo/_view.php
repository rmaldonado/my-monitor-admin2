<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fid),array('view','id'=>$data->fid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faddress')); ?>:</b>
	<?php echo CHtml::encode($data->faddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floomnum')); ?>:</b>
	<?php echo CHtml::encode($data->floomnum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdepartnum')); ?>:</b>
	<?php echo CHtml::encode($data->fdepartnum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finfo')); ?>:</b>
	<?php echo CHtml::encode($data->finfo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fcreatetm')); ?>:</b>
	<?php echo CHtml::encode($data->fcreatetm); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fstatus')); ?>:</b>
	<?php echo CHtml::encode($data->fstatus); ?>
	<br />

	*/ ?>

</div>