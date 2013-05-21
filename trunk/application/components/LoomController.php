<?php

class LoomController extends CController 
{
    public $layout      = '//themes/smarttheme/layout';
    public $view        = null;// view render object
    public $breadcrumbs = array();
    public $menus       = array(
        'items' =>  array(
                '/loom/'    => array(
                    'label' => '总览', 
                    'url'   => '/loom/',
                    'class' => 'icon-dashboard',
                    'acss'  => '',
                    'tcss'  => 'ico-monitor',
                    'items' => null,
                ),
                '/loom/loomstatus' => array(
                    'label'	=> '织机管理',
                    'class'	=> 'icon-desktop',
                    'url'       => '/loom/loomstatus',
                    'acss'      => 'yellow',
                    'tcss'      => 'ico-cog-2',
                    'items'	=> null,
                ),
                array(
                    'label'	=> '统计信息',
                    'class'	=> 'icon-bar-chart',
                    'url'	=> '/loom/statistic',
                    'acss'      =>  'green',
                    'tcss'      =>  'ico-chart-4',
                    'items'     => array (
                        '/loom/statistic/effect' => array(
                            'label'	=> '效率统计',
                            'class'	=> 'icon-edit',
                            'url'	=> '/loom/statistic/effect',
                            'acss'      =>  'green',
                            'tcss'      =>  'ico-chart-4',
                        ),
                        '/loom/statistic/product' => array(
                            'label'	=> '产量统计',
                            'class'	=> 'icon-edit',
                            'url'	=> '/loom/statistic/product',
                            'acss'      =>  'green',
                            'tcss'      =>  'ico-chart-4',
                        ),                        
                    ),
                ),
               '/loom/rollinfo' => array(
                    'label'	=> '上轴管理',
                    'class'	=> 'icon-edit',
                    'acss'      =>  'red',
                    'tcss'      =>  'ico-pen-2',
                    'url'	=> '/loom/rollinfo',
                    'items'     =>  null,
                ),
                '/loom/productinfo' => array(
                    'label'	=> '产品管理',
                    'class'	=> 'icon-list-alt',
                    'acss'      =>  'blue',
                    'tcss'      =>  'ico-layout-7',
                    'url'	=> '/loom/productinfo',
                    'items'     =>  null,
                ),
                '/loom/chaineinfo' => array(
                    'label' => '经纱管理',
                    'class' => 'icon-th',
                    'acss'      =>  'purple',
                    'tcss'      =>  'ico-box',
                    'url'   => '/loom/chaineinfo',
                    'items'     =>  null,
                ),
                '/loom/weftinfo' => array(
                    'label' => '纬纱管理',
                    'class' => 'icon-th-list',
                    'acss'      =>  'purple',
                    'tcss'      =>  'ico-box',
                    'url'   => '/loom/weftinfo',
                    'items'     =>  null,
                ),                                
                array(
                    'label'	=> '员工管理',
                    'class'	=> 'icon-user-md',
                    'acss'      =>  'purple',
                    'tcss'      =>  'ico-box',
                    'url'	=> 'icons.html',
                    'items'     =>  null,
                ),
                array(
                    'label'	=> '其他操作',
                    'class'	=> 'icon-check-empty',
                    'acss'      =>  'orange',
                    'tcss'      =>  'ico-cloud',
                    'url'	=> 'grid_sys.html',
                    'items'     =>  null,
                ),
            ),
    );
    

    public function getRender() {
        if ($this->view === null)
            $this->view = Yii::app()->getViewRenderer();
        
        return $this->view;
    }
    
    public function init() {
        $uri = Yii::app()->request->requestUri;
        if (strpos($uri, 'favicon') !== false || strpos($uri, 'robots') !== false) {
            Yii::app()->end();
        }
        parent::init();
        $this->view = Yii::app()->getViewRenderer();
        $reqUri = Yii::app()->getRequest()->getRequestUri();
        if (strpos($reqUri, '?') !== false) {
            $reqUri = substr($reqUri, 0, strpos($reqUri, '?'));
        }

        $this->view->currentURI = $reqUri;
        $this->view->currentCaption = $this->getCurrentCaption($reqUri);
        $fscname = null;//
        if (Yii::app()->user->getId() !== null) {
            $fscname = Yii::app()->user->fscname;
            $this->view->sitemedia = array(
                    'uri'   => Yii::app()->params['mediauri'],
                    'jssuffix'  => Yii::app()->params['mediasuffix'],
                );
        }
        
        if ($fscname) {
            $this->view->userinfo = array(
                'fscname'   =>  $fscname,
            );
            $this->renderMenu();
        }

    }
    
    public function renderMenu() {
        $this->view->sidebarMenus = $this->menus;
    }
    
    public function filters()
    {
            return array(
                    'accessControl', // perform access control for CRUD operations
            );
    }

    public function accessRules()
    {
            return array(
                    array('allow', // allow authenticated users to access all actions
                            'users'=>array('@'),
                    ),
                    array('deny',  // deny all users
                            'users'=>array('*'),
                    ),
            );
    }
    
    private function getCurrentCaption($uri) {
        if (isset($this->menus['items'])) {
            $menu = $this->menus['items'];
            if (isset($menu[$uri])) {
                return $menu[$uri]['label'];
            }
            else {
                $loops = sizeof($menu);
                for ($i = 0; $i < $loops; $i++) {
                    if  (isset($menu[$i])) {
                        $submenu = $menu[$i]['items'];
                        if (is_array($submenu)) {
                            
                           return isset($submenu[$uri]) ? $submenu[$uri]['label'] : '其它';
                        }
                    }
                }
            }
        }
    }
}

?>
