<!DOCTYPE html>
<html>
<head>
	<title>Login || Sign Up Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/css/style-login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<body>
	<div class="wrapper">
		<div class="title-text">
			<div class="title">
				<a href="{{url('login')}}">Login</a> 
			</div>
			<div class="title aktiv">
				SignUp
			</div>
		</div> 

		<div class="form-container">
			<div class="form-inner">
				<form action="{{url('signup')}}" method="post" enctype="multipart/form-data">
							@csrf
					<div class="field">
						<input type="text" name="nama" placeholder="Nama" required>
					</div>
					<div class="field">
						<input type="text" name="username" placeholder="Username" required>
					</div>
					<div class="field">
						<input type="email" name="email" placeholder="Email Address" required>
					</div>
					<div class="field">
						<input type="text" name="tmptlahir" placeholder="Tempat Lahir" >
					</div>
					<div class="field">
						<input type="date" name="tgllahir" placeholder="Tanggallahir" required>
					</div>
					<div class="field">
						<input type="text" name="password" placeholder="Password Baru" required>
					</div>
						<button type="submit" class="tombol" style="border: 0">
							<a>Login</a>
					
					</button>
					<div class="signup-link">Sudah Punya Akun ? <a href="{{url('login')}}"> LogIn Now</a></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>