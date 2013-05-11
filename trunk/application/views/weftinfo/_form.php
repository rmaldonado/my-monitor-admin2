
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php /** @var BootActiveForm $form */

$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    //'id'=>'horizontalForm',
    'type'=>'horizontal',
)); 

echo $form->errorSummary($model); 

echo $form->textFieldRow($model, 'fdensity');
echo $form->textFieldRow($model, 'fcycle');
echo $form->textFieldRow($model, 'fnumber');
echo $form->textFieldRow($model, 'flnumber');
echo $form->textFieldRow($model, 'fquota');
echo $form->textFieldRow($model, 'fspinfo');
echo $form->textFieldRow($model, 'frate');
echo $form->textFieldRow($model, 'flotnum');
echo $form->textFieldRow($model, 'fsn');
echo $form->textFieldRow($model, 'ffactory');
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
