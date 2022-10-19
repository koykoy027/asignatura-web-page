<?php
session_start();

	include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //  something was posted
        $user_name 		= $_POST['user_name'];
        $password 		= $_POST['password'];
        $last_name 		= $_POST['last_name'];
        $first_name 	= $_POST['first_name'];
        $course 		= $_POST['course'];
        $gender 		= $_POST['gender'];
        $student_number = $_POST['student_number'];
        $phone_number 	= $_POST['phone_number'];
        $email 			= $_POST['email'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into student (user_id,user_name,password,last_name,first_name,course,gender,student_number,phone_number,email) values ('$user_id','$user_name','$password','$last_name','$first_name','$course','$gender','$student_number','$phone_number','$email')";

            mysqli_query($con, $query); 
			echo "<script>alert('Teacher registration sucessful!');window.location='Student login.php'</script>";
            
        }else
        {
            echo "Please enter some valid information";
        }
    }
	?>


<html>
<head>
	<meta charset="utf-8">
	<title>🎓MNYK | Register</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
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
			      				<li><a class="dropdown-item" href="../Teacher Files/Teacher login.php">As Teacher</a></li>
			      				<li><a class="dropdown-item" href="../Student Files/Student login.php">As Student</a></li>
			      			</ul>
			      		</li>

			      <!-- DROPGOWN SIGNUP -->
			      <li class="nav-item dropdown">
			      	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			      		Sign up
			      	</a>
			      	<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			      		<li><a class="dropdown-item" href="../Teacher Files/Teacher register.php">As Teacher</a></li>
			      		<li><a class="dropdown-item" href="../Student Files/Student register.php">As Student</a></li>
            		</ul>
            	</li>
            </ul>
        </div>
    </div>			
</nav>
</div>
			

	
	<div class="registerShowcase1">
		<form action="Student register.php" method="post">
		<div class="container">
			<br><br><br>
			<div class="boxBody">
				<br><br>
				<h3 class="text-center">Create Account</h3>
				<br>
				<form action="">
					<p class="lead">Name</p>
					<div class="row text-center">
						<div class="col-md-6">
							<input type="text" name="last_name" id="regtextBox" placeholder="Last Name" required="">
						</div>
						<div class="col-md-6">							
							<input type="text" name="first_name" id="regtextBox" placeholder="First Name" required="">							
						</div>
					</div>
					
					<br>

					<div class="form-group">
						<p class="lead">Course</p>
						<select class="form-control" name="course" id="regtextBox">
							<option>BSCS</option>
							<option>BSIS</option>
							<option>BSIT</option>
						</select>
					</div>
					<br>

					<div class="form-group">
						<p class="lead">Gender</p>
						<select class="form-control" name="gender" id="regtextBox">
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					<br>

					<br>

					<div>
						<p class="lead">Student Number</p>
						<input type="tel" name="student_number" id="regtextBox" placeholder="Enter your Student Number" required="" maxlength="10" minlength="9">
					</div>

					<div>
						<p class="lead">Phone</p>
						<input type="tel" name="phone_number" id="regtextBox" placeholder="Enter your Phone Number" required="" maxlength="11">
					</div>
					<br>
					
					<div>
						<p class="lead">Email</p>
						<input type="email" name="email" id="regtextBox" placeholder="Enter your Email" required="">
					</div>
					<br>

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

					
					<input type="radio" id="Terms">
					<label for="Terms" class="small">You confirm that you’re 18 years old or older or giving this consent on behalf of an individual below 18 years old.</label>

					<input type="radio" id="Terms">
					<label for="Terms" class="small">You confirm and agree in our Terms and Condition.</label>
					<br><br>

					<div class="d-grid gap-2">
						<input type="submit" class="btn btn-primary" id="btnCreateAccount" value="Create Account">	
					</div>
					<br>
					<hr>
					<br>
					<p class="medium text-center">If youre already have an account. <a href="Student login.php" style="text-decoration: none;color: deepskyblue;">Login Account</a> Instead</p>
					
				</form>
			</div>
		</div>
		<form method="post">
	</div>
	<br><br>
			
				<!-- FOOTER -->
<div class="footer">
	<div class="container fluid">
		<div class="row">
			<div class="col-md-7">
				<a class="navbar-brand" href="../../index.php"><img src="../../img/MNKLOGO.png" height="75%" width="25%"></a>
				<span>©2021 MNK Limited</span>	
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