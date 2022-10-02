<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/enter.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lgin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lgin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lgin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lgin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="lgin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lgin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lgin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="lgin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lgin/css/util.css">
	<link rel="stylesheet" type="text/css" href="lgin/css/main.css">
<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="proses_login.php" method="post">
					<span class="login100-form-title p-b-43">
						Login Perpustakaan 
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid username is required: anon123">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Ingat saya
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Lupa Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>					
				</form>

				<div class="login100-more" style="background-image: url('images/perpus.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="lgin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="lgin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="lgin/vendor/bootstrap/js/popper.js"></script>
	<script src="lgin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="lgin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="lgin/vendor/daterangepicker/moment.min.js"></script>
	<script src="lgin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="lgin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="lgin/js/main.js"></script>

</body>
</html>