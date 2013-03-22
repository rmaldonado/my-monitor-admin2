<?php
class SmartyViewRenderer extends CApplicationComponent implements IViewRenderer
{    
    private $_smarty;
    public $fileExtension = '.tpl';
    
    public function init()
    {
        $this->_smarty = new Smarty();
        $runtimePath = dirname(Yii::app()->getBasePath());
        $runtimePath .= '/apptemp/runtime';
        if (!is_dir($runtimePath))
            mkdir($runtimePath);

        $this->_smarty->compile_dir = $runtimePath . '/smarty/compile';
        $this->_smarty->cache_dir   = $runtimePath . '/smarty/cache';        
        
    }
    
    public function renderFile($context, $file, $data = null, $return = null)
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
