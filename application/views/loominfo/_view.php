<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fid),array('view','id'=>$data->fid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floomsn')); ?>:</b>
	<?php echo CHtml::encode($data->floomsn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floomid')); ?>:</b>
	<?php echo CHtml::encode($data->floomid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floomx')); ?>:</b>
	<?php echo CHtml::encode($data->floomx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floomy')); ?>:</b>
	<?php echo CHtml::encode($data->floomy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fcompanyid')); ?>:</b>
	<?php echo CHtml::encode($data->fcompanyid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frepeaterid')); ?>:</b>
	<?php echo CHtml::encode($data->frepeaterid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fgatherid')); ?>:</b>
	<?php echo CHtml::encode($data->fgatherid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fstatus')); ?>:</b>
	<?php echo CHtml::encode($data->fstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frollid')); ?>:</b>
	<?php echo CHtml::encode($data->frollid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floominfo')); ?>:</b>
	<?php echo CHtml::encode($data->floominfo); ?>
	<br />

	*/ ?>

</div>