<?php 
	/*
	优先级解释：
	@最优先完成
	@@次优先级
	@@@需要完成的
	
	这里是登录页面
	功能：
	@	用户登录方式有2种：用户名和邮箱
	@	找回密码功能
	@@	在收单服务平台这里需要显示用户自定义LOGO
	*/
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title><?php /*调用后台字段设置*/ ?>收单服务平台</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
		<?php /*Login 页面专有CSS 不要在其他页面载入*/?>
        <link rel="stylesheet" href="css/maruti-login.css" />
    </head>
    <body>
        <div id="loginbox">  
        	<?php /*不知道cms的方式，大致结构如下*/?>          
            <form id="loginform" class="form-vertical" action="index.php">
				 <div class="control-group normal_text"><h3>收单服务平台</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="用户邮箱" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="密码" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-warning" id="to-recover">忘记密码?</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-success" value="登 入" /></span>
                </div>
            </form>
            <?php /*找回密码表单：
            	判断是否有该用户；
				发送密码修改链接（该页面还没有设计）；
            	保存密码修改；
            	重新登录*/?>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">输入注册时的邮箱，我们将发送密码给您！</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail 地址" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-warning" id="to-login">&laquo; 返回登入</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-info" value="找回密码" /></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script> 
        <?php /*Login 页面 专有js 请勿加载于其他页面*/?> 
        <script src="js/maruti.login.js"></script> 
    </body>

</html>
