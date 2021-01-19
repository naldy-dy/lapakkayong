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
						<select class="field" style="border: 2px solid #C53BBA ;padding-top: -10" name="jenis_kelamin">
							<option class="field" value="1">Laki-Laki</option>
							<option class="field" value="2">Perempuan</option>
						</select>
					</div>
					<div class="field">
						<select class="field" style="border: 2px solid #C53BBA ;" name="level">
							<option class="field" value="2">Penjual</option>
							<option class="field" value="3">Pembeli</option>
						</select>
					</div>
					
					<div class="field" style="padding-top: 20px">
						<input type="number" name="notlp" placeholder="No Telepon" required>
					</div>
					<div class="field">
						<input type="text" name="tmptlahir" placeholder="Tempat Lahir" required>
					</div>
					<div class="field">
						<input type="date" name="tgllahir" placeholder="Tanggallahir" required>
					</div>
					<div class="field">
						<input type="password" name="password" placeholder="Password Baru" required>
					</div>
					<div class="field">
						<input type="file" name="foto"required>
					</div>
						<button type="submit" class="tombol" style="border: 0"><a>Daftar</a>
					</button>
					<div class="signup-link">Sudah Punya Akun ? <a href="{{url('login')}}"> LogIn Now</a></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>