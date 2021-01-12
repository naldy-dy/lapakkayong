<!DOCTYPE html>
<html>
<head>
	<title>Login || Sign Up Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/css/style-login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{url('public')}}/assets/css/bootstrap.css" rel="stylesheet" />
</head> 
<body>
	<div class="wrapper">
		<div class="title-text">
			<div class="title aktiv">
				Login 
			</div>
			<div class="title">
				<a href="{{url('signup')}}">SignUp </a>
			</div>
		</div> 
		<div class="form-container">
			@include('admin.template.utils.notif')
			<div class="form-inner">
				<form action="{{url('login')}}" method="post" class="login">
				@csrf	
					<div class="field">
						<input type="text" name="email" placeholder="Email Address" required>
					</div>
					<div class="field">
						<input type="Password" name="password" placeholder="Password" required>
					</div>
					<div class="pass-link"><a href="">Forgate Password</a></div>
					<div class="field btn">
					<button type="submit" class="tombol" style="border: 0">
							<a>Login</a>
					</button>
					</div>
					<div class="signup-link"> Belum Punya Akun ? <a href="{{url('/signup')}}"> SignUp Now</a></div>
					
				</form>	
			</div>
		</div>
	</div>
</body>
</html>