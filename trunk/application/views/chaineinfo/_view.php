<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fid), array('view', 'id'=>$data->fid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fnumber')); ?>:</b>
	<?php echo CHtml::encode($data->fnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdensity')); ?>:</b>
	<?php echo CHtml::encode($data->fdensity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fminirate')); ?>:</b>
	<?php echo CHtml::encode($data->fminirate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fquota')); ?>:</b>
	<?php echo CHtml::encode($data->fquota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fspinfo')); ?>:</b>
	<?php echo CHtml::encode($data->fspinfo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frate')); ?>:</b>
	<?php echo CHtml::encode($data->frate); ?>
	<br />

	<?php /*
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