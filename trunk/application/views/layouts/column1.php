<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>SITETITLE_PREFIX</title>
    <?php $this->beginContent('/layouts/mediascripts');$this->endContent();?>
    
</head>
<body>    
    <div id="loader"><img src="/media/img/loader.gif"/></div>
    <div class="wrapper">
        
        <div class="sidebar">
            <?php $this->beginContent('/layouts/sidebar');$this->endContent();?>
        </div>
        
        <div class="body">            
            <ul class="navigation">
                <?php $this->beginContent('/layouts/topnav');$this->endContent();?>
            </ul>
            
            <div class="content"> 
                <div class="page-header">
                    <?php $this->beginContent('/layouts/bodynav');$this->endContent();?>
                </div>
                <?php echo $content; ?> 
            </div>            
                
            </div>
    </div>        
    <div class="dialog" id="source" style="display: none;" title="Source"></div>
</body>
</html>
