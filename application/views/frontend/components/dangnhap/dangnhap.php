

<?php echo form_open('dang-nhap'); ?>
<div class="main-content-wrapper">
					
<div class="container">

<nav class="breadcrumb " role="navigation" aria-label="breadcrumbs">
	<ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
	<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="index.php" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
				<meta itemprop="position" content="1">		
			</li>
	
			<li><a href="/account" target="_self">Tài khoản</a></li>
			<li class="active"><span>Đăng nhập</span></li>
			
	</ol>
</nav>

</div>

<div class="container nav-wrapper">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="layout-page">
	<span class="header-contact header-page clearfix">
		<h1>Đăng nhập</h1>
	</span>

	<div id="customer-login">
		<div id="login" class="userbox">
			<div class="accounttype">
				<h2 class="title"></h2>
			</div>
			<p>
				Vui lòng điền Email và Mật khẩu để đăng nhập
			</p>
			<form accept-charset="UTF-8" action="" id="customer_login" method="post">
				<input name="form_type" type="hidden" value="customer_login">
				<input name="utf8" type="hidden" value="✓">

			

			<div class="clearfix large_form">
				<label for="customer_email" class="icon-field"><i class="icon-login icon-envelope "></i></label>
				<input required="" type="text" id="login-form-username" name="username" id="first_name" placeholder="Tên Đăng Nhập" class="text">
				<div class="error" id="password_error"><?php echo form_error('username')?></div>
			</div>

			
			<div class="clearfix large_form">
				<label for="customer_password" class="icon-field"><i class="icon-login icon-shield"></i></label>
				<input required="" type="password"id="login-form-password" name="password" placeholder="Mật khẩu" class="text" size="16">      			
				<div class="error" id="password_error"><?php echo form_error('password')?></div>	
</div>
			

			<div class="action_bottom">
				<input class="btn btn-signin" type="submit"  id="login-form-submit" name="login-form-submit" value="Đăng nhập">
			</div>
			<div class="req_pass">
				<a href="quen-mat-khau">Quên mật khẩu?</a>
			
				hoặc <a href="<?php echo base_url() ?>dang-ky" title="Đăng ký">Đăng ký</a>
			</div>

			
<input id="81b27c7d9eca4bbc8e75e1ade23b7461" name="g-recaptcha-response" type="hidden" value="03AGdBq27QyYp1kjZ8sth8LUxHkirErjGHL_DDExcOdd0YbljLuWxRJpVcP5JB0YNHXSra-3uheqnxMD6dQufpyYHbhJhdAQ8iY94rv4BlCDeH2aA6Luag4ELa3A58Nzc8Ann9B-mopvCvW55o_00i4YqWH_UerbPmvj7aiRjKh39ysCp0CK9ls1ZMshrRW71nVWcE47JVJJ98qr8ULswv_a1txYheNWvEzK1clWGZLDHetSF-MTdt8mq8GLjwnjH8QlXPnOI5Ok3LehXIUh30sXVckBX3MC1oOvhvE092T1-GawJATYjJXsVmyuabf1TlnenMQU05lEQHGzX3TlhVofT3OVC6pLKRVtis3Ely_LKMgN-aur7E9eR88yEyKrMElZ0zk9Oe0-bHJ5ge047o6AQrWomET9Af-jYwO5ePOq8R41yva1IcEU7ETIhSvZ2_RjI23LSDl8q53YKmR1C_ske1S9TKEWVv7YmftC731s9FyYFl50m4ZwVcnVVwMjNZNU7MW6bEuWvL"><script src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('81b27c7d9eca4bbc8e75e1ade23b7461').value = token;});});</script></form>
		</div>

		<div id="recover-password" class="userbox hidden">
			<div class="accounttype">
				<h2>Phục hồi mật khẩu</h2>
			</div>		

			<form accept-charset="UTF-8" action="/account/recover" method="post">
<input name="form_type" type="hidden" value="recover_customer_password">
<input name="utf8" type="hidden" value="✓">

			

			<label for="email" class="icon-field"><i class="icon-login icon-envelope "></i></label>
			<input type="email" value="" size="30" name="email" placeholder="Email" id="recover-email" class="text">

			<div class="action_bottom">
				<input class="btn" type="submit" value="Gửi">
			</div>
			<div class="req_pass">
				<a href="javascript:void(0);" id="hideRecovery">Hủy</a>
			</div>
			
<input id="4e99b543dc564a27ba2c04d92b165c5a" name="g-recaptcha-response" type="hidden" value="03AGdBq27VImYKXGAnuIX0rbgfXbakon_-dAFxc4JtVLd4HQi3Gg14LqPCNRM9jjoCCs7Xs3swDesfzyZOKf0wu8LY-ZR26yrG8IR5Th6aa-ItoaFSQpdqnhTD4vJW02LHyRoV9hVeAcAQ0cxoLS8Gq20dotnJff6fdI7WOe2sxVsGbfHGw-VVUk3H7i9p6v7VD9SXomWjRZFB9MuDSa3dQiXWt__icWn3cfI8F7u9lazNYsN7dHMJF9nZ98ZbtzliIYVt_WWfPPBHcHBUozwLlFIbAn3FXjo1pFJWI4GKlPQoyE4Zv2DKrIiqzPCrjR_9yuROXzn45DUKxs55c4WNy_ACKIHw888D_tepdhY_MpK_qg3ghflJfzubVNJE2nw_Fo15oe1IbLKRpmM4JsPE4Dlwfpsmi_8JOwSH9YeBaKQWpBKrYMs-OhV3qPyWZZXnFefRsbFjbEpjCzo2jCw9NHhqTRvrIvDIB3MJ0NY8UpFP9fyIVkViAmPkV_DHzv94aCimWcUxKUBG"><script src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('4e99b543dc564a27ba2c04d92b165c5a').value = token;});});</script></form>
		</div>

		
	</div>
</div>
<script type="text/javascript">
	function showRecoverPasswordForm() { debugger;
		document.getElementById('login').style.display='none';
		document.getElementById('recover-password').style.display ='block';
	}

	function hideRecoverPasswordForm() {
		document.getElementById('recover-password').style.display = 'none';
		document.getElementById('login').style.display = 'block';
	}

	if (window.location.hash == '#recover') { showRecoverPasswordForm(); }
</script>

</div>

</div>