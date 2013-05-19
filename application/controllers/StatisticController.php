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

        $looms = array();
        $ls = LoomInfo::model()->findAll();
        for ($i=0; $i < count($ls); $i++) { 
            $l = $ls[$i];
            $looms[$l->frepeaterid][$l->flcardid] = $l->floomname;
        }


        if (isset($_REQUEST['start_time']) && $_REQUEST['start_time']) {
            $date_start = strtotime($_REQUEST['start_time']);
        } else {
            $prev = time() - 86400;
            $date_start = mktime(0,0,0, date("j", $prev), date("n", $prev), date("Y", $prev));
            $_REQUEST['start_time'] = date('Y-m-d', $prev);
        }
        if (isset($_REQUEST['end_time']) && $_REQUEST['end_time']) {
            $date_end = strtotime($_REQUEST['end_time']) + 86400;
        } else {
            $date_end = time();
            $_REQUEST['end_time'] = date('Y-m-d');
        }
        


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
        $last_r = array();
        foreach($results as $result) {
            $card_id = $result['flcardid'];
            $repeat_id = $result['frepeatid'];

            if (!isset($time_slice[$card_id])) {
                $name = "[$repeat_id][$card_id]";//$looms[$repeat_id][$card_id];
                if (isset($looms[$repeat_id][$card_id])) {
                    $name = $looms[$repeat_id][$card_id];
                }
                $time_slice[$card_id] = array('name' => $name, 'max_ts'=> 0, 'min_ts' => 0, 
                                              'max_fwbrknum'=> 0, 'min_fwbrknum' => $result['fwbrknum'], 
                                              'max_ftbrknum'=> 0, 'min_ftbrknum' => $result['ftbrknum'],
                                              'max_fsbrknum'=> 0, 'min_fsbrknum' => $result['fsbrknum'], 
                                              'max_fobrknum'=> 0, 'min_fobrknum' => $result['fobrknum']);
                $card_info = &$time_slice[$card_id];
                $last_event = -1;
                $begin_timestamp = 0;

                if ($last_r) {
                    $l_card_id = $last_r['flcardid'];
                    $time_slice[$l_card_id]['max_fwbrknum']= $last_r['fwbrknum'];
                    $time_slice[$l_card_id]['max_ftbrknum']= $last_r['ftbrknum'];
                    $time_slice[$l_card_id]['max_fsbrknum']= $last_r['fsbrknum'];
                    $time_slice[$l_card_id]['max_fobrknum']= $last_r['fobrknum'];
                }        
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

            $last_r = $result;
            
        }


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


            $time_slice[$k]['wbrknum'] = $slice['max_fwbrknum'] - $slice['min_fwbrknum'];
            $time_slice[$k]['sbrknum'] = $slice['max_fsbrknum'] - $slice['min_fsbrknum'];
            $time_slice[$k]['tbrknum'] = $slice['max_ftbrknum'] - $slice['min_ftbrknum'];
            $time_slice[$k]['obrknum'] = $slice['max_fobrknum'] - $slice['min_fobrknum'];
            $time_slice[$k]['stop_times'] = $time_slice[$k]['wbrknum'] + $time_slice[$k]['sbrknum'] + $time_slice[$k]['tbrknum'] + $time_slice[$k]['obrknum'];

            $time_slice[$k]['all_time0'] = $slice['max_ts'] - $slice['min_ts'];
            $time_slice[$k]['all_time'] = $all_time;
            $time_slice[$k]['stop_time'] = $stop_time;
            $time_slice[$k]['other_time'] = $other_time;
            
            if ($all_time > 0) {
                $time_slice[$k]['efficiency'] = ($all_time-$stop_time)/$all_time;
            }
            
        }


        


        //TODO
        $viewName = 'effect';
        $this->render($viewName, array('time_slice' => $time_slice, 'looms' => $looms));
    }
    
    public function ActionProduct() {
        
        //TODO
        $viewName = 'product';
        $this->render($viewName);
    }
}

?>
