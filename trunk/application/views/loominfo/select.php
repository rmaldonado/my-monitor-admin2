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

<ul id="looms-selectable">
<?php
//echo Yii::app()->user->fcompanyid;
$data=$dataProvider->getData();
define('MAXX', 20);
$n = count($data);

if (!function_exists('check_position')) {
	function check_position ($x, $y) {
		static $_position;
		if (!isset($_position)) {
			$_position = array();
		}
		//print_r($_position);
		if (count($_position) <= $x) {
			for ($i=count($_position); $i <= $x; $i++) { 
				$_position[$i] = array();
			}
		}
		if (count($_position[$x]) <= $y) {
			for ($i=count($_position[$x]); $i <= $y; $i++) { 
				$_position[$x][$i] = false;
			}
		}

		if ($_position[$x][$y]) {
			$find = false;
			for ($i=0; $i < count($_position[$x]); $i++) { 
				if ($_position[$x][$i] == false) {
					$y = $i;
					$find = true;
					break;
				}
			}

			if (!$find) {
				for ($i=0; $i < count($_position); $i++) { 
					for ($j=0; $j < count($_position[$i]); $j++) { 
						if ($_position[$i][$j] == false) {
							$x = $i;
							$y = $j;
							$find = true;
							break;
						}
					}
				}
			}

			if (!$find) {
				$m = $x;
				$n = $y;
				$sy = false;
				while ($_position[$x][$y]) {
					if ($m > MAXX) {
						$sy = true;
						$m = 0;
					}
					if ($sy) {
						$n++;
					} else {
						$m++;	
					}
					
					if (!isset($_position[$x])) {
						$_position[$x] = array();
					}
					if (count($_position[$x]) <= $y) {
						for ($i=count($_position[$x]); $i <= $y; $i++) { 
							if (!isset($_position[$x][$i])) {
								$_position[$x][$i] = false;
							}
						}
					}
				}

			}

		}

		$_position[$x][$y] = true;

		return array($x, $y);

	}
}

$cn = 15; //列数
$rn = ceil($n/$cn); //行数

$w = 30;
$h = 20;

for ($j=0; $j < $n; $j++) { 
    $row = $data[$j];
    $cls = '';
    //$p = check_position($row->floomx, $row->floomy);
    //$style = 'left:'.($p[0]*$w).'px;top:'.($p[1]*$h).'px';
    echo "<li";
    if ($cls) {
    	echo ' class="'.$cls.'" ';
    }
    //echo " style='{$style}'";
    echo ">";
    echo $row->getAttribute('floomsn');
    echo "</li>";
}

$code = '
$( "#looms-selectable" ).selectable();
';

$css = '

#looms-selectable .ui-selecting { background: #FECA40; }
#looms-selectable .ui-selected { background: #F39814; color: white; }
#looms-selectable { list-style-type: none; margin: 0; padding: 0; width: 550px; }
#looms-selectable li { margin: 3px; padding: 1px; float: left; width: 30px; height: 30px; font-size: 1em; text-align: center; border: 1px solid #f00; }

';


$cs=Yii::app()->clientScript;
$cs->registerScript('loom-list-select', $code, CClientScript::POS_READY);
$cs->registerCss('loom-list-select-css', $css);

?>
</ul>

