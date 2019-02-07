<?php

include('dbc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
<!--===============================================================================================-->
</head>
<body>

  <?php
if(isset($_POST["btnlogin"]))
{
function validate_input($data) 
    {
         $data = trim($data);
         $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
      $uname = validate_input($_POST["user"]);
      $pwd = validate_input($_POST["pwd"]);   
    if($uname =="" || $pwd=="")
    {
      echo "<script> alert('Please Fill The required Field!');</script>";
      return;
    }
    else
    {
      $sql = "SELECT * FROM admin_login where ad_username='$uname' and ad_password='$pwd'";
          $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) 
          {   
            session_start();
            $_SESSION['log_user']=$uname;
            setcookie('user_n',$uname,time() + 86400*30,'/');
            setcookie('user_p',$pwd,time() + 86400*30,'/'); 
              echo "<script>window.open('home.php','_self')</script>";
             
          } 
          else
          {         
            echo "<script> alert('Invalid Username or Password!');</script>";
            return;
          }   
}
}
?>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					
				</div>

				<form action="" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="user" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btnlogin">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/bootstrap/js/popper.js"></script>
	<script src="admin/asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="asset/js/main.js"></script>

</body>
</html>