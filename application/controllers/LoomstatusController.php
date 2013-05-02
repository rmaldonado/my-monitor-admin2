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
        echo '<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Modal header</h3>
                </div>
                <div class="modal-body">
                  <p>One fine body…</p>
                </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>';
    }
}

?>
