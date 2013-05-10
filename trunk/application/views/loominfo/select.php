<?php
$this->breadcrumbs=array(
	'Loominfos',
);

$this->menu=array(
	array('label'=>'Create Loominfo', 'url'=>array('create')),
	array('label'=>'Manage Loominfo', 'url'=>array('admin')),
);
?>

<h1>Select Looms</h1>

<?php /*$this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ ?>

<ul id="loom-list">
<?php

$data=$dataProvider->getData();
$n = count($data);

$cn = 4; //列数
$rn = ceil($n/$cn); //行数

for ($j=0; $j < $n; $j++) { 
    $row = $data[$j];
    $cls = ''
    echo "<li"
    if ($cls) {
    	echo ' class="'.$cls.'" ';
    }
    echo ">";
    echo $row->getAttribute('floomsn');
    echo "</li>";
}

$code = '
$( ".column" ).sortable({
	connectWith: ".column"
});
$( ".portlet" ).addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
		.find( ".portlet-header" )
		.addClass( "ui-widget-header ui-corner-all" )
		.prepend( "<span class=\'ui-icon ui-icon-minusthick\'></span>")
		.end()
		.find( ".portlet-content" );
$( ".portlet-header .ui-icon" ).click(function() {
	$( this ).toggleClass( "ui-icon-minusthick" ).toggleClass( "ui-icon-plusthick" );
	$( this ).parents( ".portlet:first" ).find( ".portlet-content" ).toggle();
});
//$( ".column" ).disableSelection();


$( "#loom-list" ).sortable();



$( "#loom-list" ).selectable();
';

$css = '
.column { width: 170px; float: left; padding-bottom: 100px; }
.portlet { margin: 0 1em 1em 0; }
.portlet-header { margin: 0.3em; padding-bottom: 4px; padding-left: 0.2em; }
.portlet-header .ui-icon { float: right; }
.portlet-content { padding: 0.4em; }
.ui-sortable-placeholder { border: 1px dotted black; visibility: visible !important; height: 50px !important; }
.ui-sortable-placeholder * { visibility: hidden; }

#sortable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
#sortable li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 90px; font-size: 4em; text-align: center; }



#selectable .ui-selecting { background: #FECA40; }
#selectable .ui-selected { background: #F39814; color: white; }
#selectable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
#selectable li { margin: 3px; padding: 1px; float: left; width: 100px; height: 80px; font-size: 4em; text-align: center; }


';


$cs=Yii::app()->clientScript;
$cs->registerScript('loom-list-select', $code, CClientScript::POS_READY);
$cs->registerCss('loom-list-select-css', $css);

?>
</ul>