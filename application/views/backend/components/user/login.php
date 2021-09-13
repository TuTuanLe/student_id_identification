





<!doctype html>
<html>
<head>
<base href="<?php echo base_url(); ?>"></base>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="public/images/templates/favicon.png" />
		<link rel="stylesheet" href="public/css/bootstrap.css">
		<link rel="stylesheet" href="public/css/style_login.css">
		<link rel="stylesheet" href="public/css/font-awesome.min.css">


</head>

<body>
	

<div class="container">
<br/>
<br/>
<br/>
<br/>

<center> <b id="login-name">LOGIN Here </b> </center>>
	
	<div class="row">
		
<div class="col-md-6 col-md-offset-3" id="login">  

<form name="form1" action="admin/user/login.html" method="post" role="form">
            
        <div class="form-group">
            <label class="user"> UserName  </label>
            <div class="input-group">
                <span class="input-group-addon" id="iconn"> <i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="text1" name="username" placeholder="username">
            </div>
            <div class="error" id="password_error"><?php echo form_error('username')?></div>
                
        </div>

        <div class="form-group">
            <label class="user"> Password </label>
            <div class="input-group">
                <span class="input-group-addon" id="iconn1"> <i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="text2" name="password" placeholder=" Enter Password">
            </div>
            <div class="error" id="password_error"><?php echo form_error('password')?></div>
        </div>

        <div class="form-group">

        <input type="submit" class="btn btn-success" value="login" style="border-radius:0px;">
        <input type="reset" class="btn btn-danger" value="reset" style="border-radius:0px;">

            </div>
            <br/><br/><br/>
            <a href="#" style="color: white; font-size: 15px; float: right; margin-right: 10px;"> Forget Password </a>
            <a href="#" style="color: white; font-size: 15px; float: right; margin-right: 10px;"> Register </a>
            <?php  if(isset($error)):?>
                        <div class="row">
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>
                        </div>
            <?php  endif;?>
        </form>
  </div>
	</div>
</div>
	</body>
	</html>