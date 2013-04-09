<?php
class LoomstatusController extends LoomController {
    
    
    public function actionRender() {
     
        $tplName = 'render';
        //$this->view->assign('dd', 'sdfs');
        //var_dump($this->view);
        $this->view->dd = 'sdfsdf';
        $this->render($tplName);
    }
}

?>
