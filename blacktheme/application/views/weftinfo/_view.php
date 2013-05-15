<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fid), array('view', 'id'=>$data->fid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdensity')); ?>:</b>
	<?php echo CHtml::encode($data->fdensity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fcycle')); ?>:</b>
	<?php echo CHtml::encode($data->fcycle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fnumber')); ?>:</b>
	<?php echo CHtml::encode($data->fnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flnumber')); ?>:</b>
	<?php echo CHtml::encode($data->flnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fquota')); ?>:</b>
	<?php echo CHtml::encode($data->fquota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fspinfo')); ?>:</b>
	<?php echo CHtml::encode($data->fspinfo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('frate')); ?>:</b>
	<?php echo CHtml::encode($data->frate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flotnum')); ?>:</b>
	<?php echo CHtml::encode($data->flotnum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fsn')); ?>:</b>
	<?php echo CHtml::encode($data->fsn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ffactory')); ?>:</b>
	<?php echo CHtml::encode($data->ffactory); ?>
	<br />

	*/ ?>

</div>