<?php
class LoomstatusController extends LoomController {
    
    public function actionIndex() {
        $viewName = 'index';
        $infoRows = array();
        $num = 1;
        for($i = 1; $i < 10; $i++) {
            $row = array();
            for($j = 1; $j < 10; $j++) {
                $row[] = array(
                    'sid'   => sprintf('A%03d', $num++),
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
}

?>
