<?php
class LoomstatusController extends LoomComController {
    
    public function actionIndex() {

        $viewName = 'index';
        $infoRows = array();
        /*$num = 1;
        for($i = 1; $i < 10; $i++) {
            $row = array();
            for($j = 1; $j < 20; $j++) {
                $row[] = array(
                    'sid'   => sprintf('A%03d', $num++),
                    'st'    =>  $j == 3 ? 'stop' : ($j == 7 ? 'low' : 'run')
                );
            }
            $infoRows[] = $row;
        }*/

        $rows = Loominfo::model()->findAll();
        for ($i=0; $i < count($rows); $i++) { 
            $row = $rows[$i];
            $fid = $row['fid'];
            $c = array(
                'condition' => "frefloomid='ALL' or frefloomid LIKE '%,{$fid},%'",
                'order' => 't.fid'
            );
            $roll = Rollinfo::model()->find($c);
            $r = $roll->getAttributes();
            $r['fproduct'] = $roll->fproduct->getAttributes();
            $r['fchaine'] = $roll->fchaine->getAttributes();
            $r['fweft'] = $roll->fweft->getAttributes();
            $a = $row->getAttributes();
            $a['rollinfo'] = $r;

            //effect
            $day_start = strtotime(date('Y-m-d'));
            $week_start = strtotime("-7 days");
            $week_start = strtotime(date("Y-m-d", $week_start));

            $month_start = strtotime("-1 month");
            $month_start = strtotime(date("Y-m-d", $month_start));

            $c = array(
                'select' => 'AVG(fpowersec) AS fpowersec, AVG(frunsec) AS frunsec',
                'condition' => "frepeatid=:frepeatid AND flcardid=:flcardid AND fhourid>:start ",
                //'order' => 't.fid'
            );
            $c['params'] = array(':start' => $week_start, ':frepeatid' => $row['frepeaterid'], ':flcardid' => $row['flcardid']);
            $week = Hourdata::model()->find($c);

            $c['params'] = array(':start' => $month_start, ':frepeatid' => $row['frepeaterid'], ':flcardid' => $row['flcardid']);
            $month = Hourdata::model()->find($c);

            $a['effect_week'] = $week['fpowersec'] > 0 ? round(($week['frunsec']/$week['fpowersec'])*100, 2) .'%' : '-';
            $a['effect_month'] = $month['fpowersec'] > 0 ? round(($month['frunsec']/$month['fpowersec'])*100, 2) . '%' : '-';

            $infoRows[] = $a;
        }


        $this->view->media = array(
            'scripts'   =>  array(
                'loomstatus/index.js',
            ),
            'styles'    =>  array(
                'loomstatus/index.css',
            )
        );
        $this->view->looms = array(
            'info'  => $infoRows,
            'json' => CJSON::encode($infoRows)
        );
        
        $this->render($viewName);
    }
    

    public function actionStatus() {
        
    }


    public function actionRender() {
     
        $tplName = 'render';
        //$this->view->assign('dd', 'sdfs');
        //var_dump($this->view);
        $this->view->dd = 'sdfsdf';
        $this->render($tplName);
    }
    
    public function actionShowinfo() {

    }
    
    public function actionUpdatest() {
        //TODO
        $arr = array();
        /*for ($i = 1; $i <= 200; $i++) {
            $key = sprintf("A%03d", $i);
            $arr[$key] = array(
                'rpm'       => 600,
                'effect'    => sprintf('%.0d.%0d%%', rand() % 100, rand() % 100),
                'runtime'   => 32423
            );
        }*/

        $arr = Status::model()->findAll();

        echo CJSON::encode($arr);
    }
}

?>
