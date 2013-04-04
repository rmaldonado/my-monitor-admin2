<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>404 - Aries Premium Admin Template</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="/media/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 7]>
        <link href="/media/css/ie.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='/media/js/plugins/other/lte-ie7.js'></script>
    <![endif]-->      
    <style type="text/css">
    .error-code {
        color: #DB4A39;
        font-size: 120px;
        line-height: 120px;
        margin-bottom: 30px;
    }
    .error-container {
        background: none repeat scroll 0 0 #F9F9F9;
        border: 10px solid #EEEEEE;
        padding: 20px;
        text-align: center;
        width:500px;
        margin: 50px auto 0px;
    }   
    
.error-text {
    font-size: 26px;
    line-height: 26px;
    margin-bottom: 30px;
}
    </style>
    
</head>
<body>    

<div>
{foreach $errorsArr as $errCode => $errorRow}   
    <div id="error-tabs-{$errCode}" class="tab-pane row-fluid">
        <div class="offset2 span8">
            <div class="error-container">
                <div class="error-code"><i class="ico-warning-sign"></i></div>
                <div class="error-text">{$errorRow.msg}</div>
                {*<form class="error-search" onsubmit="return false;">
                    <div class="input-append">
                        <input type="text" id="example-error-search" style="width:auto" placeholder="查找..">
                        <button class="btn"><i class="ico-search"></i></button>
                    </div>
                </form>*}
            </div>
        </div>
    </div>
{/foreach}
</div>
</body>
</html>