<?php
class LoomstatusController extends LoomComController {
    
    public function actionIndex() {
        $viewName = 'index';
        $infoRows = array();
        $num = 1;
        for($i = 1; $i < 10; $i++) {
            $row = array();
            for($j = 1; $j < 15; $j++) {
                $row[] = array(
                    'sid'   => sprintf('A%03d', $num++),
                    'st'    =>  $j == 3 ? 'stop' : ($j == 7 ? 'low' : 'run')
                );
            }
            $infoRows[] = $row;
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
        );
        
        $this->render($viewName);
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
        for ($i = 1; $i <= 200; $i++) {
            $key = sprintf("A%03d", $i);
            $arr[$key] = array(
                'rpm'       => 600,
                'effect'    => sprintf('%.0d.%0d%%', rand() % 100, rand() % 100),
                'runtime'   => 32423
            );
        }
        echo json_encode($arr);
    }
}

?>
