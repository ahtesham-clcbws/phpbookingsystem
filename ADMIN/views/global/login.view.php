<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title><?=$sitetitle;?></title>
	<!-- Favicon-->
	<link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">

	<!-- Plugins Core Css -->
	<link href="../../assets/css/app.min.css" rel="stylesheet">

	<!-- Custom Css -->
	<link href="../../assets/css/style.css" rel="stylesheet" />
	<link href="../../assets/css/pages/extra_pages.css" rel="stylesheet" />
</head>

<body class="login-page">
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img alt="" src="<?=$logologin;?>">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<i class="material-icons focus-input1001">person</i>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<i class="material-icons focus-input1001">lock</i>
					</div>
					<div class="contact100-form-checkbox">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value=""> Remember me
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-50">
						<a class="txt1" href="forgot-password.html">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Plugins Js -->

	<script src="../../assets/js/app.min.js"></script>

	<!-- Extra page Js -->
	<script src="../../assets/js/pages/examples/pages.js"></script>

</body>

</html>