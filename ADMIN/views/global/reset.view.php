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
						Reset Password
					</span>
					<div class="text-center">
						<p class="txt1 p-b-20">
							Enter your registered email address.
						</p>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter email">
						<input class="input100" type="text" name="username" placeholder="Email">
						<i class="material-icons focus-input1001">email</i>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Reset My Password
						</button>
					</div>
					<div class="text-center p-t-50">
						<a class="txt1" href="sign-in.html">
							Login?
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