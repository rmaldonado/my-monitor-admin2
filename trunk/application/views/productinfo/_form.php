

<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php /** @var BootActiveForm $form */

$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    //'id'=>'horizontalForm',
    'type'=>'horizontal',
)); 

echo $form->textFieldRow($model, 'fprodcutsn');
echo $form->textFieldRow($model, 'fproductnm');
echo $form->textFieldRow($model, 'fsilksp');
echo $form->textFieldRow($model, 'freedwd');
echo $form->textFieldRow($model, 'freedsn');
echo $form->textFieldRow($model, 'freedlen');
echo $form->textFieldRow($model, 'ftotallen');
echo $form->textFieldRow($model, 'fweave');
echo $form->textFieldRow($model, 'ftype');
echo $form->textFieldRow($model, 'flevel');
echo $form->textFieldRow($model, 'fplspeed');
echo $form->textFieldRow($model, 'fpleffect');
echo $form->textFieldRow($model, 'fchaineid');
echo $form->textFieldRow($model, 'fweftid');
echo $form->textFieldRow($model, 'finfo');
echo $form->textFieldRow($model, 'fstatus');
?>
<div class="form-actions">
<?php
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=> ($model->isNewRecord ? 'Create' : 'Save'))); 
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset'));
?>
</div>
<?php
$this->endWidget();

?>


