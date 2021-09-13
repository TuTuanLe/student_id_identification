<?php echo form_open('dang-ky'); ?>
<div class="main-content-wrapper">
					<style>
						.userbox .icon-field {
							color: #D8D7D7;
						}

						.userbox select {
							max-width: calc(100% - 30px) !important;
							float: left;
							margin-left: -5px;
							margin-top: 10px;
							height: 37px;
							width: 270px;
							padding: 0;
							padding-left: 10px;
							border-radius: 0;
							outline: none;
							border: 1px solid #E7E7E7;
						}
					</style>
<div class="container">
	

<nav class="breadcrumb " role="navigation" aria-label="breadcrumbs">
	<ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
	<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="index.php" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
				<meta itemprop="position" content="1">		
			</li>
			<li class="active"><span>Ðăng ký</span></li>
			
	</ol>
</nav>
	<div class="clearfix">
		<div id="layout-page" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<span class="header-contact header-page clearfix">
				<h1>Tạo tài khoản</h1>
			</span>
			<div class="userbox">
				<p class="text-center">
					Xin vui lòng nhập đầy đủ thông tin dưới đây để tạo tài khoản tại fitness chúng tui
				</p>
				<form accept-charset="UTF-8" action="" id="customer_register" method="post">
					<input name="form_type" type="hidden" value="create_customer">
					<input name="utf8" type="hidden" value="✓">
					<div id="last_name" class="clearfix large_form">
						<label for="last_name" class="icon-field"><i class="icon-login icon-user "></i></label>
						<input required="" type="text" value="" name="username" placeholder="Tên Đăng Nhập" id="first_name" class="text" size="30">
						<div class="error" id="username_error"><?php echo form_error('username')?></div>
					</div>
					<div id="first_name" class="clearfix large_form">
						<label for="first_name" class="icon-field"><i class="icon-login icon-shield"></i></label>
						<input required="" type="password" value="" name="password" placeholder="Mật Khẩu" id="register-form-password" class="text" size="30">
						<div class="error" id="username_error"><?php echo form_error('password')?></div>
					</div>
					<div id="first_name" class="clearfix large_form">
						<label for="first_name" class="icon-field"><i class="icon-login icon-user "></i></label>
						<input required="" type="password" value="" name="password" placeholder="Nhập Lại Mật Khẩu" id="register-form-repassword" class="text" size="30">
						<div class="error" id="username_error"><?php echo form_error('re_password')?></div>
					</div>
					<div id="first_name" class="clearfix large_form">
						<label for="first_name" class="icon-field"><i class="icon-login icon-user "></i></label>
						<input required="" type="text" value="" name="name" placeholder="Họ Tên" id="first_name" class="text" size="30">
						<div class="error" id="username_error"><?php echo form_error('name')?></div>
					</div>

					<div id="email" class="clearfix large_form">
						<label for="email" class="icon-field"><i class="icon-login icon-envelope "></i></label>
						<input required="" type="email" value="" placeholder="Email" name="email" id="register-form-email" class="text" size="30">
						<div class="error" id="username_error"><?php echo form_error('email')?></div>
					</div>
					<div id="phone_wrap" class="clearfix large_form">
						<label for="phone" class="icon-field"><i class="glyphicon glyphicon-phone-alt"></i></label>
						<input type="text" id="first_name" name="phone" placeholder="Số điện thoại" class="text " size="30">
						<div class="error" id="username_error"><?php echo form_error('phone')?></div>
					</div>
					<div class="check_agree">
						<label style="font-weight:300;"><input type="checkbox" required="" class="agree"> Tôi đã đọc và đồng ý với <a target="_blank" href="">Điều khoản sử dụng</a>fitness 3M1W </label>
					</div>
					<div class="action_bottom">
						<input class="btn" type="submit" value="Đăng ký">			
					</div>
					<div class="action_bottom">
						<a class="come-back btn" style="background:#3a3a3c;" href="./dang-nhap">Đăng nhập</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>