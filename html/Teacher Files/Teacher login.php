<?php
session_start();

	include("../../php/connection.php");
    include("../../php/teacher functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //  something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];


        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //read to database
            
            $query = "select * from teacher where user_name = '$user_name' limit 1";

           $result = mysqli_query($con, $query); 

           if($result)
           {
	           	if($result && mysqli_num_rows($result) > 0)
	            {
	                $user_data = mysqli_fetch_assoc($result);
	              if($user_data['password'] === $password)
	              {
	              	$_SESSION['user_id'] = $user_data['user_id'];
             header("location: Teacher Profile/Teacher profile.php");
			//  function_alert("Welcome to Geeks for Geeks");
			

            die;
	              }
	            }
           }
            // echo "Please enter some valid information";
			
        }else
        {
            echo "Please enter some valid information";
            // $alert = <script>alert("asdsad");</script>;
            // echo $alert;
        }
    }
?>

<html>
<head>
	<meta charset="utf-8">
	<title>🎓Asignatura | Teacher Login</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body style="overflow-x: hidden;">
	<div id="exort">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<a class="navbar-brand" href="../../index.php">
			  		<img src="../../img/MNKLOGO.png" height="100px" width="250px">
			  	</a>
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="../../index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../Web Files/About us.php">About us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../Web Files/Contact us.php">Contact us</a>
						</li>
						<li class="nav-item">			        
							<span class="nav-link">|</span>
						</li>			      
			      
			      <!-- DROPDOWN LOGIN -->
			      		<li class="nav-item dropdown">
			      			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			      				Log in
			      			</a>
			      			<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			      				<li><a class="dropdown-item" href="Teacher login.php">As Teacher</a></li>
			      				<li><a class="dropdown-item" href="../Student Files/Student login.php">As Student</a></li>
			      			</ul>
			      		</li>

			      <!-- DROPGOWN SIGNUP -->
			      <li class="nav-item dropdown">
			      	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			      		Sign up
			      	</a>
			      	<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			      		<li><a class="dropdown-item" href="Teacher register.php">As Teacher</a></li>
			      		<li><a class="dropdown-item" href="../Student Files/Student register.php">As Student</a></li>
            		</ul>
            	</li>
            </ul>
        </div>
    </div>			
</nav>
</div>
			

	<!-- BODY -->
	
		
			<div class="row">

				<div class="col-lg-6">
					<div class="TeacherLoginLeft">
						<div class="container">
							<br><br>
							<div class="TeacherLoginLeftText">
								<h1>
									Apply now! To be a part of our Asig<sub>natura</sub> teacher or login as one...
								</h1>
								<br>
								<h4>Applying Teachers</h4>
								<h6>Create your teacher account now</h6>
								<p class="lead" id="justifi">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								</p>
								<p class="lead" id="justifi">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								</p>
								<br>

								<a class="btn btn-outline-primary btn-lg" href="Teacher register.php">
									Register Teacher Account
								</a>

							</div>
						</div>
					</div>
				</div>
	
				<div class="col-lg-6">
					<form action="Teacher login.php" method="post">	
					<div class="TeacherLoginRight">
				<br><br>
				<h3 class="text-center">Login Account</h3>
				<br>
							
					<div>
						<p class="lead">Username</p>
						<input type="text" name="user_name" id="text" placeholder="Enter your Username" required="">
					</div>
					<br>

					<div>
						<p class="lead">Password</p>
						<input type="password" name="password" id="text" placeholder="Enter your Password" required="">
					</div>
					<br>

					

					<div class="d-grid gap-2">
						<input type="submit" class="btn btn-primary" id="btnCreateAccount" value="Login Account">	
					</div>
					<br>
					<hr>
					<br>
					<p class="medium text-center">Don't have account yet ? <a href="Teacher register.php" style="text-decoration: none;color: deepskyblue;">Create Account</a> here</p>					
				
			</div>
				</div>
			</form>
			</div>






			
		
	
	
			

				
				


				<!-- FOOTER -->
<div class="footer">
	<div class="container fluid">
		<div class="row">
			<div class="col-md-7">
				<a class="navbar-brand" href="../../index.php"><img src="../../img/MNKLOGO.png" height="75%" width="25%"></a>
				<span>©2021 Asignatura Limited</span>	
			</div>
			<div class="col-md-5">
				<br>
				<ul>
					<li class="footerLink"><a href="../Web Files/Terms and condition.php" class="nav-link">Terms & condition</a></li>
					<li class="footerLink"><a href="../Web Files/About us.php" class="nav-link">About us</a></li>
					<li class="footerLink"><a href="../Web Files/Contact us.php" class="nav-link">Contact us</a></li>
				</ul>						
			</div>			
		</div>
		</div>
	</div>

	<div class="footerBottom">
		<div class="container fluid">
			<h5 class="text-center"><span style="color: #c4c4c4;">© 2021 Copyright:</span> www.asignatura.com.ph</h5>
		</div>
	</div>

</body>
</html>