<div>
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    //'id'=>'horizontalForm',
    'type'=>'vertical',
));
?>
<label>开始时间</label>
<?php
Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
$this->widget('CJuiDateTimePicker', array(
		'name' => 'start_time',
		'value' => $_REQUEST['start_time'],
		'mode'=>'datetime',
		'options' => array(
			'dateFormat' => 'yy-mm-dd'
		)
));
?>
<label>结束时间</label>
<?php
$this->widget('CJuiDateTimePicker', array(
		'name' => 'end_time',
		'value' => $_REQUEST['end_time'],
		'mode'=>'datetime',
		'options' => array(
			'dateFormat' => 'yy-mm-dd'
		)
));
?>
<?php
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=> '查询'));
$this->endWidget();

?>
</div>

		<table id="table_bug_report" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>机台</th>
					<th>产量</th>
					<th>运转效率</th>
					<th>总停时间</th>
					<th>总停次数</th>
					<th>违停时间</th>
					<th>违停次数</th>
					<th>经停时间</th>
					<th>经停次数</th>					
					<th>耳丝停时间</th>
					<th>耳丝停次数</th>
					<th>其他停时间</th>
					<th>其他停次数</th>
				</tr>
			</thead>
									
			<tbody>
<?php
	foreach ($time_slice as $k => $slice) { 
?>
				<tr>
					<td><?php echo $slice['name']; ?></td>
					<td><?php echo $slice['output']; ?></td>
					<td><?php if (isset($slice['efficiency'])) {
						printf("%.2f", $slice['efficiency']*100);
						echo '%';
					} else {
						echo '--';
					} ?></td>
					<td><?php echo $slice['stop_time']; ?></td>
					<td><?php echo $slice['stop_times']; ?></td>
					<td><?php echo isset($slice[8]) ? $slice[8]['time_len'] : '--'; ?></td>
					<td><?php echo $slice['wbrknum']; ?></td>
					<td><?php echo isset($slice[1]) ? $slice[1]['time_len'] : '--'; ?></td>
					<td><?php echo $slice['tbrknum']; ?></td>		
					<td><?php echo isset($slice[2]) ? $slice[2]['time_len'] : '--'; ?></td>
					<td><?php echo $slice['sbrknum']; ?></td>
					<td><?php echo $slice['other_time']; ?></td>
					<td><?php echo $slice['obrknum']; ?></td>
				</tr>
<?php } ?>
			</tbody>
		</table>