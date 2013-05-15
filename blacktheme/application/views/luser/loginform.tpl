<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>Login - Aries Premium Admin Template</title>
    {include file="{$SMARTY_TPL_PATH}/layouts/mediastyle.tpl"} 
    <!--[if lt IE 10]>
        <link href="/media/css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->           
    <!--[if lte IE 7]>
        <script type='text/javascript' src='/media/js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
    
</head>
<body>    
    <div id="loadercnt"><img src="/media/img/loader.gif"/></div>
    <form method="post" action="">  
    <div class="login">
        <div class="page-header">
            <div class="icon">
                <span class="ico-arrow-right"></span>
            </div>
            <h1>登录 <small>管理系统</small></h1>
        </div>        
        
        <div class="row-fluid">
            <div class="row-form" id="userid_row">
                <div class="span3">用户名 (*)</div>
                <div class="span7">
                    <input type="text" name="luserid" placeholder="用户名"/>
                </div>
            </div>
            <div class="row-form" id="password_row">
                <div class="span3">密&nbsp;&nbsp;码 (*)</div>
                <div class="span7">
                    <input type="password" name="lpasswd" placeholder="密码"/>
                </div>            
            </div>
            {*<div class="row-form">
                <div class="span12">
                    <input type="checkbox"/> 记住
                </div>
            </div>*}
            <div class="row-form">
                <div class="span12">
                    <button class="btn" id="login_btn">登录 <span class="icon-arrow-next icon-white"></span></button>
                </div>                
            </div>
        </div>
    </div>
    </form>
{include file="{$SMARTY_TPL_PATH}/layouts/mediascripts.tpl"}
    
<script type="text/javascript">
    $(document).ready(function() {
        $('#login_btn').bind('click', function(event) {
            var uid = $('input', '#userid_row').val();
            var pwd = $('input', '#password_row').val();
            $('#userid_row').removeClass('error');
            if (uid.length < 4) {
                $('#userid_row').addClass('error');
                return false;
            }
            $('#password_row').removeClass('error');
            if (pwd.length < 4) {
                $('#password_row').addClass('error');
                return false;
            }
            var url = '';
            var postData = {
                'luserid'   : uid,
                'lpasswd'   : pwd
            };
            $.post(url, postData, function(jsonData) {
                if (jsonData.retcode === 0
                    && jsonData.url !== null) {
                    window.location.href = jsonData.url;
                }    
                else {

                }

            }, 'json');
            return false;
        });
    });
</script>
</body>
</html>
