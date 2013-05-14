<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>登录系统 - NetLoom</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="/media/smarttheme/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/media/smarttheme/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/media/smarttheme/css/fonticons.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="/media/smarttheme/css/fixed/font-awesome-ie7.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/media/smarttheme/css/fonts.css" />
		<link rel="stylesheet" href="/media/smarttheme/css/ace.min.css" />
		<link rel="stylesheet" href="/media/smarttheme/css/ace-responsive.min.css" />
		<!--[if lt IE 9]>
		  <link rel="stylesheet" href="/media/smarttheme/css/fixed/ace-ie.min.css" />
		<![endif]-->
	</head>

	<body class="login-layout">
	
		<div class="container-fluid" id="main-container">
			<div id="main-content">
				<div class="row-fluid">
					<div class="span12">
						
<div class="login-container">

<div class="row-fluid">
	<div class="center">
		<h1><i class="icon-leaf green"></i> <span class="red">Net</span> <span class="white">Loom</span></h1>
		<h4 class="blue">&copy; Micro Link</h4>
	</div>
</div>

<div class="space-6"></div>

<div class="row-fluid">

    <div class="position-relative">


	<div id="login-box" class="visible widget-box no-border">

       <div class="widget-body">
            <div class="widget-main">
                    <h4 class="header lighter bigger"><i class="icon-coffee green"></i> <!-- 请输入用户名和密码 --></h4>

                    <div class="space-6"></div>


                        <fieldset>
                            <label>
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="luserid" class="span12" placeholder="用户名" />
                                    <i class="icon-user"></i>
                                </span>
                            </label>
                            <label>
                                <span class="block input-icon input-icon-right">
                                    <input type="password" name="lpasswd" class="span12" placeholder="密码" />
                                    <i class="icon-lock"></i>
                                </span>
                            </label>
                            <div class="space"></div>
                            <div class="row-fluid">
                                <label class="span8">
                                    <input type="checkbox"><span class="lbl">记住</span>
                                </label>
                                <button id="login_btn" class="span4 btn btn-small btn-primary">
                                    <i class="icon-key"></i> 登录
                                </button>
                            </div>

                        </fieldset>
      
            </div>
		</div>
	</div>
	
</div>
	
</div>


</div>


					</div>
				</div>
			</div>
		</div>

<script src="/media/smarttheme/js/lib/jquery/jquery.min.js"></script>
<script type="text/javascript">		
    $(document).ready(function() {
        $('#login_btn').bind('click', function(event) {
            var uid = $('input[name="luserid"]').val();
            var pwd = $('input[name="lpasswd"]').val();
            //$('#userid_row').removeClass('error');
            if (uid.length < 4) {
                //$('#userid_row').addClass('error');
                return false;
            }
            //$('#password_row').removeClass('error');
            if (pwd.length < 4) {
                //$('#password_row').addClass('error');
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
