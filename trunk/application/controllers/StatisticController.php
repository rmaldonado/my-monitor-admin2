<?php

class StatisticController extends LoomComController{
    
    public function ActionIndex() {
        $viewName = 'index';
        $this->view->media = array(
            'scripts'   =>  array(
                'statistic/index.js',
            ),
        );
        $this->render($viewName);
    }
    
    public function ActionEffect() {




        if (isset($_REQUEST['start_time']) && $_REQUEST['start_time']) {
            $date_start = strtotime($_REQUEST['start_time']);
        } else {
            $prev = time() - 86400;
            $date_start = mktime(0,0,0, date("n", $prev), date("j", $prev), date("Y", $prev));
            $_REQUEST['start_time'] = date('Y-m-d H:i', $date_start);
        }
        if (isset($_REQUEST['end_time']) && $_REQUEST['end_time']) {
            $date_end = strtotime($_REQUEST['end_time']);
        } else {
            $date_end = time();
            $_REQUEST['end_time'] = date('Y-m-d H:i', $date_end);
        }
        

        // $db = Events::model()->getDbConnection();
        // $c = Events::model()->getCompanyId();
           
        $time_slice = $this->getSliceData($date_start, $date_end);


        $event_fields = array(8=>'wbrknum', 2=>'sbrknum', 1=>'tbrknum'/*, 4=>'obrknum'*/);
        $skip_keys = array('name', 'max_ts', 'min_ts');
        $stop_events = array(1,4,8);
        $other_events = array(2);
        $n = count($time_slice);
        foreach ($time_slice as $k => $slice) { 
            //$slice = $time_slice[$i];
            $stop_time = 0;
            $other_time = 0;
            $all_time = 0;            
            foreach ($slice as $key => $value) {
                if (is_numeric($key)) { //!in_array($key, $skip_keys)
                    if (in_array($key, $stop_events)) {
                        $stop_time += $value['time_len'];
                    } 
                    if (in_array($key, $other_events)) {
                        $other_time += $value['time_len'];
                    }
                    $all_time += $value['time_len'];
                    if (isset($event_fields[$key])) {
                        
                    }
                }
            }

            //print_r($slice);



            $time_slice[$k]['stop_times'] = $time_slice[$k]['wbrknum'] + $time_slice[$k]['sbrknum'] + $time_slice[$k]['tbrknum'] + $time_slice[$k]['obrknum'];

            $time_slice[$k]['all_time0'] = $slice['max_ts'] - $slice['min_ts'];
            $time_slice[$k]['all_time'] = $all_time;
            $time_slice[$k]['stop_time'] = $stop_time;
            $time_slice[$k]['other_time'] = $other_time;
            
            if ($all_time > 0) {
                $time_slice[$k]['efficiency'] = ($all_time-$stop_time)/$all_time;
            }
            
        }


        /////////////////
        if (false) {
            $objPHPExcel = new PHPExcel();
            // $objPHPExcel->getProperties()->setCreator("Maarten Balliauw");
            // $objPHPExcel->getProperties()->setLastModifiedBy("Maarten Balliauw");
            // $objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");
            // $objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");
            // $objPHPExcel->getProperties()->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.");        

            $objPHPExcel->setActiveSheetIndex(0);
            // $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Hello');
            // $objPHPExcel->getActiveSheet()->SetCellValue('B2', 'world!');
            // $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Hello');
            // $objPHPExcel->getActiveSheet()->SetCellValue('D2', 'world!');
            //setCellValueByColumnAndRow( [string $pColumn = 0], [string $pRow = 1], [mixed $pValue = null], [bool $returnCell = false])
            $objPHPExcel->setCellValueByColumnAndRow( 0, 1, '机台');
            $objPHPExcel->setCellValueByColumnAndRow( 1, 1, '运转效率');
            $objPHPExcel->setCellValueByColumnAndRow( 2, 1, '总停时间');
            $objPHPExcel->setCellValueByColumnAndRow( 3, 1, '总停次数');
            $objPHPExcel->setCellValueByColumnAndRow( 4, 1, '违停时间');
            $objPHPExcel->setCellValueByColumnAndRow( 5, 1, '违停次数');
            $objPHPExcel->setCellValueByColumnAndRow( 6, 1, '经停时间');
            $objPHPExcel->setCellValueByColumnAndRow( 7, 1, '经停次数');                 
            $objPHPExcel->setCellValueByColumnAndRow( 8, 1, '耳丝停时间');
            $objPHPExcel->setCellValueByColumnAndRow( 9, 1, '耳丝停次数');
            $objPHPExcel->setCellValueByColumnAndRow( 10, 1, '其他停时间');
            $objPHPExcel->setCellValueByColumnAndRow( 11, 1, '其他停次数');    

            $i = 1;
            foreach ($time_slice as $k => $slice) { 
                $i++;
                $objPHPExcel->setCellValueByColumnAndRow( 0, 1, $slice['name']);
                $f = '--';
                if (isset($slice['efficiency'])) {
                        $f = sprintf("%.2f", $slice['efficiency']*100) . '%';
                }
                $objPHPExcel->setCellValueByColumnAndRow( 1, $i, $f);
                $objPHPExcel->setCellValueByColumnAndRow( 2, $i, $slice['stop_time']);
                $objPHPExcel->setCellValueByColumnAndRow( 3, $i, $slice['stop_times']);
                $objPHPExcel->setCellValueByColumnAndRow( 4, $i, isset($slice[8]) ? $slice[8]['time_len'] : '--');
                $objPHPExcel->setCellValueByColumnAndRow( 5, $i, $slice['wbrknum']);
                $objPHPExcel->setCellValueByColumnAndRow( 6, $i, isset($slice[1]) ? $slice[1]['time_len'] : '--');
                $objPHPExcel->setCellValueByColumnAndRow( 7, $i, $slice['tbrknum']);
                $objPHPExcel->setCellValueByColumnAndRow( 8, $i, isset($slice[2]) ? $slice[2]['time_len'] : '--');
                $objPHPExcel->setCellValueByColumnAndRow( 9, $i, $slice['sbrknum']);
                $objPHPExcel->setCellValueByColumnAndRow( 10, $i, $slice['other_time']);
                $objPHPExcel->setCellValueByColumnAndRow( 11, $i, $slice['obrknum']);
            }
            $objPHPExcel->setCellValueByColumnAndRow( 0, 1, '');




            // $objPHPExcel->getActiveSheet()->setTitle('Simple');

            $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
            // $objWriter->save(str_replace('.php', '.xlsx', __FILE__));
            echo $objWriter->save();

            Yii::app()->end();
        } else {
                    //TODO
            $viewName = 'effect';
            $this->render($viewName, array('time_slice' => $time_slice));
        }


    }
    
    public function ActionProduct() {
        
        if (isset($_REQUEST['start_time']) && $_REQUEST['start_time']) {
            $date_start = strtotime($_REQUEST['start_time']);
        } else {
            $prev = time() - 86400;
            $date_start = mktime(0,0,0, date("n", $prev), date("j", $prev), date("Y", $prev));
            $_REQUEST['start_time'] = date('Y-m-d H:i', $date_start);
        }
        if (isset($_REQUEST['end_time']) && $_REQUEST['end_time']) {
            $date_end = strtotime($_REQUEST['end_time']);
        } else {
            $date_end = time();
            $_REQUEST['end_time'] = date('Y-m-d H:i', $date_end);
        }
        
           
        $time_slice = $this->getSliceData($date_start, $date_end);


        $event_fields = array(8=>'wbrknum', 2=>'sbrknum', 1=>'tbrknum'/*, 4=>'obrknum'*/);
        $skip_keys = array('name', 'max_ts', 'min_ts');
        $stop_events = array(1,4,8);
        $other_events = array(2);
        $n = count($time_slice);
        $removes = array();
        foreach ($time_slice as $k => $slice) { 
            //$slice = $time_slice[$i];
            $fid = $slice['loomid'];
            $rollinfo = Rollinfo::model()->findByAttributes(array(), "(frefloomid = 'ALL' OR frefloomid LIKE '%,{$fid},%')" );
            if (!$rollinfo) {
                $removes[] = $k;
                continue;
            }
            $fdensity = $rollinfo->fweft->fdensity;

            $time_slice[$k]['output'] = ($slice['srpnum'])/$fdensity;

            $stop_time = 0;
            $other_time = 0;
            $all_time = 0;            
            foreach ($slice as $key => $value) {
                if (is_numeric($key)) { //!in_array($key, $skip_keys)
                    if (in_array($key, $stop_events)) {
                        $stop_time += $value['time_len'];
                    } 
                    if (in_array($key, $other_events)) {
                        $other_time += $value['time_len'];
                    }
                    $all_time += $value['time_len'];
                    if (isset($event_fields[$key])) {
                        
                    }
                }
            }

            //print_r($slice);



            $time_slice[$k]['stop_times'] = $time_slice[$k]['wbrknum'] + $time_slice[$k]['sbrknum'] + $time_slice[$k]['tbrknum'] + $time_slice[$k]['obrknum'];

            $time_slice[$k]['all_time0'] = $slice['max_ts'] - $slice['min_ts'];
            $time_slice[$k]['all_time'] = $all_time;
            $time_slice[$k]['stop_time'] = $stop_time;
            $time_slice[$k]['other_time'] = $other_time;
            
            if ($all_time > 0) {
                $time_slice[$k]['efficiency'] = ($all_time-$stop_time)/$all_time;
            }
            
        }

        $n = count($removes);
        for ($i=0; $i < $n; $i++) { 
            unset($time_slice[$removes[$i]]);
        }

//print_r($time_slice);
        //TODO
        $viewName = 'product';
        $this->render($viewName, array('time_slice' => $time_slice));
    }


    private function getSliceData($date_start, $date_end)
    {
        $looms = array();
        $ls = Loominfo::model()->findAll();
        for ($i=0; $i < count($ls); $i++) { 
            $l = $ls[$i];
            $looms[$l->frepeaterid][$l->flcardid] = array('name'=> $l->floomname, 'fid' => $l->fid);
        }


        $c = new CDbCriteria;
        $c->select = 'frepeatid, flcardid, SUM(fwbrknum) as swb, SUM(fsbrknum) as ssb, SUM(fobrknum) as sob, SUM(frpmnum) as srp, SUM(ftbrknum) as stb';
        $c->condition = "ftimestamp>:date_start and ftimestamp<:date_end";
        $c->group = 'frepeatid, flcardid';
        $c->params = array(
            ':date_start'=>$date_start,':date_end'=>$date_end,
        );

        $results = Hourdata::model()->findAll($c);
        // $sql = "select frepeatid, flcardid, SUM(fwbrknum) as swb, SUM(fsbrknum) as ssb, SUM(fobrknum) as sob, SUM(frpmnum) as srp, SUM(ftbrknum) as stb
        //         from {{hourdata}}
                
        //         group by frepeatid, flcardid";
        //where ftimestamp>:date_start and ftimestamp<:date_end
        //echo $sql;                
        //$cmd = $db->createCommand($sql);
        //$cmd->bindValue(':date_start', $date_start);
        //$cmd->bindValue(':date_end', $date_end);

        // $results = array();
        // $results = $cmd->queryAll();
        

        $sums = array();

        $n = count($results);

        for ($i=0; $i < $n; $i++) { 
            $r = $results[$i];
            $card_id = $r['flcardid'];
            $repeat_id = $r['frepeatid'];
            if (!isset($sums[$repeat_id])) {
                $sums[$repeat_id] = array();
            }
            $sums[$repeat_id][$card_id] = array('swb'=>$r['swb'],'ssb'=>$r['ssb'],'sob'=>$r['sob'],'srp'=>$r['srp'],'stb'=>$r['stb']);
        }

//print_r($sums);


        $criteria = new CDbCriteria;
        $criteria->condition = "ftimestamp>:date_start and ftimestamp<:date_end and fstatus=1";
        $criteria->group = "ftimestamp";
        $criteria->order = "frepeatid,flcardid,ftimestamp";


        $criteria->params = array(
            ':date_start'=>$date_start,':date_end'=>$date_end,
        );

        $results = Events::model()->findAll($criteria);

        //
        $time_slice = array();
        $card_info = array();
        $run_begin_time = 0;
        $run_end_time = 0;
        $last_event = -1;
        $begin_timestamp = 0;
        //$last_r = array();
        foreach($results as $result) {
            $card_id = $result['flcardid'];
            $repeat_id = $result['frepeatid'];

            if (!isset($time_slice[$card_id])) {
                $name = "[$repeat_id][$card_id]";//$looms[$repeat_id][$card_id];
                if (isset($looms[$repeat_id][$card_id])) {
                    $name = $looms[$repeat_id][$card_id]['name'];
                    $loom_id = $looms[$repeat_id][$card_id]['fid'];
                }
                $time_slice[$card_id] = array('loomid'=> $loom_id, 'name' => $name, 'max_ts'=> 0, 'min_ts' => 0, 
                                              'max_fwbrknum'=> 0, 'min_fwbrknum' => $result['fwbrknum'], 
                                              'max_ftbrknum'=> 0, 'min_ftbrknum' => $result['ftbrknum'],
                                              'max_fsbrknum'=> 0, 'min_fsbrknum' => $result['fsbrknum'], 
                                              'max_fobrknum'=> 0, 'min_fobrknum' => $result['fobrknum']);
                $card_info = &$time_slice[$card_id];
                $last_event = -1;
                $begin_timestamp = 0;


                if (isset($sums[$repeat_id][$card_id])) {
                    $card_info['wbrknum'] = $sums[$repeat_id][$card_id]['swb']; //$slice['max_fwbrknum'] - $slice['min_fwbrknum'];
                    $card_info['sbrknum'] = $sums[$repeat_id][$card_id]['ssb']; //$slice['max_fsbrknum'] - $slice['min_fsbrknum'];
                    $card_info['tbrknum'] = $sums[$repeat_id][$card_id]['stb']; //$slice['max_ftbrknum'] - $slice['min_ftbrknum'];
                    $card_info['obrknum'] = $sums[$repeat_id][$card_id]['sob']; //$slice['max_fobrknum'] - $slice['min_fobrknum'];
                    $card_info['srpnum'] = $sums[$repeat_id][$card_id]['srp']; //$slice['max_fobrknum'] - $slice['min_fobrknum'];
                } else {
                    $card_info['wbrknum'] = 0;
                    $card_info['sbrknum'] = 0;
                    $card_info['tbrknum'] = 0;
                    $card_info['obrknum'] = 0;    
                    $card_info['srpnum'] = 0;            
                }

                // if ($last_r) {
                //     $l_card_id = $last_r['flcardid'];
                //     $time_slice[$l_card_id]['max_fwbrknum']= $last_r['fwbrknum'];
                //     $time_slice[$l_card_id]['max_ftbrknum']= $last_r['ftbrknum'];
                //     $time_slice[$l_card_id]['max_fsbrknum']= $last_r['fsbrknum'];
                //     $time_slice[$l_card_id]['max_fobrknum']= $last_r['fobrknum'];
                // }
            }


            $event_id = $result['feventid'];
            //$event_fields = array(8=>'wbrknum', 2=>'sbrknum', 1=>'tbrknum', 4=>'obrknum');

            if (!isset($card_info[$event_id])) {
                $card_info[$event_id] = array('time_len'=>0, 'num' => 0);
            }

            $card_info[$event_id]['num']++;
            //
            $card_info['max_ts'] = max($card_info['max_ts'], $result['ftimestamp']);
            if ($card_info['min_ts'] == 0) {
                $card_info['min_ts'] = $result['ftimestamp'];
            } else {
                $card_info['min_ts'] = min($card_info['min_ts'], $result['ftimestamp']);
            }
            //

            if ($last_event != $event_id) {
                if ($last_event != -1) {
                    $card_info[$last_event]['time_len'] += ($result['ftimestamp'] - $begin_timestamp);
                }
                
                $begin_timestamp = $result['ftimestamp'];
                $last_event = $event_id;
            }

            //$last_r = $result;
            
        }

        return $time_slice;

    }


}

?>
