<?php
session_start();
$message = "Invalid username Or password";

if(isset($_POST['Login'])){

	
$conn=mysqli_connect('mysql1007.mochahost.com','arabyhos_jobs','.b+_X@}ln-of','arabyhos_jobs');
$message = "Invalid username Or password";
$message1 = "Invaliquery";

	$userName=$_POST['username'];
	$passWord=$_POST['pass'];
	$password= md5($passWord);
	$query="SELECT user.user_id,user.username,user.is_log FROM user WHERE user.username=
	'".$userName."' AND user.pass='".$password."'";
	$result=mysqli_query($conn,$query);




	if ($result) {

	$row=mysqli_fetch_assoc($result);
	if($row==null){
echo "<script type='text/javascript'>alert('$message');window.location.href ='index.php';</script>"; 
	}else{
		$_SESSION['user_id'] = $row['user_id'];
        header("location:home.php"); 

	}
		}else{
echo "<script type='text/javascript'>alert('$message1');window.location.href ='index.php';</script>"; 
		

}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="imagess/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontss/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontss/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendors/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="csss/util.css">
	<link rel="stylesheet" type="text/css" href="csss/main.css">
<!--===============================================================================================-->
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('imagess/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30 " style="max-width:332px;
	width:400px;
	margin: 0 auto;
	padding:40px;
	border-radius:5px;
	height:450px;
	color: #ffffff;
	border: 2px outset #FEEDB5;
	box-shadow: -1px 4px 26px 11px rgba(0,0,0,75);
	">
				<form action="" method="POST" class="login100-form validate-form" enctype="multipart/form-data">
					

					<span class="login100-form-title p-t-20 p-b-45">
						Job Directions
					</span>
                       <hr>
                       

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required" >
							
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
					
						<input  type="submit" name="Login" value="Login" class="login100-form-btn">
							
						
					
					

					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/bootstrap/js/popper.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="jss/main.js"></script>

</body>
</html>