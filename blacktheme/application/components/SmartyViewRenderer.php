<?php
class SmartyViewRenderer extends CApplicationComponent implements IViewRenderer
{    
    private $_smarty;
    public $fileExtension = '.tpl';
    
    public function init()
    {
        $this->_smarty = new Smarty();
        $appBasePath = dirname(Yii::app()->getBasePath());
        $runtimePath = $appBasePath . '/apptemp/runtime';
        if (!is_dir($runtimePath))
            mkdir($runtimePath);
        
        $this->_smarty->assign('SMARTY_TPL_PATH', $appBasePath . '/application/views');
        $this->_smarty->assign('SITETITLE_PREFIX', '');
        $this->_smarty->template_dir = $appBasePath . '/application/views';
        $this->_smarty->compile_dir = $runtimePath . '/smarty/compile';
        $this->_smarty->cache_dir   = $runtimePath . '/smarty/cache';        
        //$this->_smarty;
    }
    
    public function __set($name, $value) {     
        $this->_smarty->assign($name, $value);
    }
    
    public function renderFile($context, $file, $data, $return)
    {
        if (is_array($data)) 
        {
            foreach ($data as $key => $value)
            {

            }
        }
        
        $this->_smarty->assign($data);
        
        if ($return !== null)
        {
            return $this->_smarty->fetch($file);
        }
        else
        {
            $this->_smarty->display($file);
        }
    }
}

?>
