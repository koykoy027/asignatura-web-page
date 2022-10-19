 <?php
session_start();

	include("connection.php");
    include("functions.php");


			$p = "user";
			$u = "pass";
			


			 $user_name = $_POST['user_name'];
			 $password = $_POST['password'];

			 //ctoney ctoney123
			 if ($user_name =='ctoney' AND $password=='ctoney123'){
			    echo "You have logged in!";
			}
			 else {
			    echo "You have not requested a login form!";
			} 
				
?>


<html>
<head>
	<meta charset="utf-8">
	<title>🎓Asignatura | Student Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- <script defer src="login-page.js"></script> -->


</head>

<body>
	
			

	<!-- BODY -->
	<div class="registerShowcase1" style="height: 100%;padding-top: 5%;">

		<form action="Student login.php" method="post">
		<div class="container fluid">
			<br><br><br>
			<div class="boxBody">
				<br><br>
				<h3 class="text-center">Admin</h3>
				<br>
				<form action="">
					
					<div>
						<p class="lead">Username</p>
						<input type="text" name="user_name" id="regtextBox" placeholder="Enter your Username" required="">
					</div>
					<br>

					<div>
						<p class="lead">Password</p>
						<input type="password" name="password" id="regtextBox" placeholder="Enter your Password" required="">
					</div>
					<br>

					 <!-- <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
				      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
				      <input type="submit" value="Login" id="login-form-submit"> -->

					

					<div class="d-grid gap-2">
						<input type="submit" class="btn btn-primary" id="btnCreateAccount" value="LOGIN">	
					</div>
					<br>
					<hr>
					<br>
					
				</form>
			</div>
		</div>
	</form>
	</div>
	
			

				
				


				

	<!-- <div class="footerBottom">
		<div class="container">
			<h5 class="text-center"><span style="color: #c4c4c4;">© 2021 Copyright:</span> www.MNK.com.ph</h5>
		</div>
	</div> -->

</body>
</html>