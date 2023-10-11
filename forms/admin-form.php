<?php
	session_start();
	// if(!isset($_SESSION['username'])){
	// 	header('location:../forms/admin-form.php');
	// }
?>


<?php
    $server="localhost";
    $username='root';
    $password='';
    $database='election';
    $conn = mysqli_connect($server,$username,$password,$database);
    if(!$conn){
        die ( mysqli_connect_error());
    }
    else{
        // echo "database connection established<br>";
    }
?>

<?php


// echo $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD']=='POST'){
			echo "success<br>";
			$password = $_POST['password'];
			$email = $_POST['email'];
			$email_search = "select * from `admin` where `email` = '$email'";
			// echo $qq;
			// echo "<br>";
			$query = mysqli_query($conn,$email_search);
			$email_count = mysqli_num_rows($query);

			if($email_count){
				$email_pass = mysqli_fetch_assoc($query);
				$db_pass = $email_pass['password'];
				$_SESSION['username'] = $email_pass['email'];
				// $pass_decode = password_verify($password,$db_pass);
				$pass_decode = ($password==$db_pass);
				if($pass_decode){
					echo "login successful";
					echo '
					<script>
						window.location.href = "../admin/admin.php";
					</script>
				';
				}
				else{
					echo "password wrong";
				}
			}
			else{
				echo "email not found";
			}
			// while($row = mysqli_fetch_assoc($result)){
			// }
		
    }

    
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Log in</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<!-- <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" /> -->
	</head>
	<body class="login" style="background-image: url(iitg1.jpg); background-repeat: no-repeat; background-size: 100% 100%;">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">

				<div class="box-login">
				<div class="logo margin-top-10">
				<a href="../index.html" ><h2 style="font-weight: bolder;">IITG | Admin Login</h2></a>
				</div>
					<form class="form-login" method="post">
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<p>
								Please enter your email and password to log in.<br />
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="email" id="name" placeholder="Email id">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" id="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									 </span><a href="forgot-password.php">
									Forgot Password ?
								</a>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
								Don't have an account yet?
								<a href="registration.php">
									Create an account
								</a>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>