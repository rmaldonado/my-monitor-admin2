<?php
class SiteController extends LoomController {

    public function actionIndex() {
        $data = array(
            'site_page_title'   => 'index',
        );
        
        $this->view->media = array(
            'scripts'   => array(
                'site/index.js',
            ),
        );
        $productRows = array();
        for($i =0; $i < 7; $i++) {
            $productRows[] = array(
                'code'  =>  '1515花瑶绉',
                'name'  =>  '1515花瑶绉',
                'spec'  =>  '2013尼达丝',
                'width' =>  '150',
                'tlength'   =>  '3880',
            );
        }
        $this->view->product = $productRows;
        $this->render('sp_index', $data);
    }
    


    public function actionSummary() 
    {
        $a = array();

        $rows = Status::model()->findAll();
        $run_num = 0;
        $fault_num = 0;
        $stop_num = 0;
        $comp_num = 0;
        $total_num = count($rows);
        for ($i=0; $i < $total_num; $i++) { 
            switch ($rows[$i]['frstatus']) {
                            case 1:
                            case 2:
                            case 4:
                            case 8:
                                $fault_num++;
                                break;
                            case 32:
                                $run_num++;
                                break;
                            case 201:
                                $comp_num++;
                                break;
                            default:
                                $stop_num++;
                        }
        }

        $a['run_num'] = $run_num;
        $a['fault_num'] = $fault_num;
        $a['stop_num'] = $stop_num;
        $a['comp_num'] = $comp_num;

        $total_num = Loominfo::model()->count();

        $a['total_num'] = $total_num;

            //effect
            $day_start = strtotime(date('Y-m-d'));
            $week_start = strtotime("-7 days");
            $week_start = strtotime(date("Y-m-d", $week_start));

            $month_start = strtotime("-1 month");
            $month_start = strtotime(date("Y-m-d", $month_start));

            $c = array(
                'select' => 'AVG(fpowersec) AS fpowersec, AVG(frunsec) AS frunsec, AVG(frpmnum) AS frpmnum, SUM(frpmnum) AS frlength',
                'condition' => "fhourid>:start",
                //'order' => 't.fid'
            );

            $c['params'] = array(':start' => $day_start);
            $day = Hourdata::model()->find($c);

            $c['params'] = array(':start' => $week_start);
            $week = Hourdata::model()->find($c);

            $c['params'] = array(':start' => $month_start);
            $month = Hourdata::model()->find($c);


            $a['effect_day'] = $day['fpowersec'] > 0 ? round(($day['frunsec']/$day['fpowersec'])*100, 2) .'%' : '-';
            $a['effect_week'] = $week['fpowersec'] > 0 ? round(($week['frunsec']/$week['fpowersec'])*100, 2) .'%' : '-';
            $a['effect_month'] = $month['fpowersec'] > 0 ? round(($month['frunsec']/$month['fpowersec'])*100, 2) . '%' : '-';
            $a['rpm_day'] = $day['frpmnum'] == null ? '-' : $day['frpmnum'];
            $a['rpm_week'] = $week['frpmnum'] == null ? '-' : $week['frpmnum'];
            $a['rpm_month'] = $month['frpmnum'] == null ? '-' : $month['frpmnum'];

            $rollinfo = Rollinfo::model()->find();
            $fdensity = $rollinfo->fweft->fdensity;

            $a['output_day'] = $day['frlength'] > 0 ? round(($day['frlength']/$fdensity), 2)  : '-';
            $a['output_week'] = $week['frlength'] > 0 ? round(($week['frlength']/$fdensity), 2)  : '-';
            $a['output_month'] = $month['frlength'] > 0 ? round(($month['frlength']/$fdensity), 2)  : '-';            

        echo CJSON::encode($a);
    }



    public function actionCharteffect() {
        //TODO
        echo json_encode(array());
    }

    public function actionInfo() {
        //echo Yii::app()->user->femail;
        //$name = Yii::app()->user->extinfo;
        echo json_encode(array());
    }
    
    public function actionRollinfo() {
        //TODO
        echo json_encode(array());
        
    }

    public function login($username,$password) {
        $identity = new UserIdentity($username,$password);
        if($identity->authenticate())
                Yii::app()->user->login($identity);
        
        return $identity->isAuthenticated;
    }

    public function ActionProduct() {
        
        //TODO
        echo json_encode(array());
    }
    
    public function ActionEvents() {
        //TODO
        echo json_encode(array());
    }
            
}