<?php
session_start();

	include("../../php/connection.php");
    include("../../php/teacher functions.php");
   
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //  something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_initial = $_POST['middle_initial'];
        $contact_number = $_POST['contact_number'];
        $email = $_POST['email'];
        $birth_date = $_POST['birth_date'];
        $teacher_id_number = $_POST['teacher_id_number'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into teacher (user_id,user_name,password,last_name,first_name,middle_initial,contact_number,email,birth_date,teacher_id_number) values ('$user_id','$user_name','$password','$last_name','$first_name','$middle_initial','$contact_number','$email','$birth_date','$teacher_id_number')";

            mysqli_query($con, $query);             

			 echo "<script>alert('Teacher registration sucessful!');window.location='Teacher login.php'</script>";
			// die();

        }else
        {
            echo "<script>alert('Teacher registration unsucessful!');window.location='Teacher register.php'</script>";
        }
    }

?>



<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>🎓ASIGNATURA | Teacher register</title>

	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  color: #fff;
  position: relative;
  background: rgba(0, 0, 0, 0.3);
  padding: 5%;
  width: 100%;
}

#message p {
  font-size: small;
  margin-top: 2%;
  margin-bottom: none;
  padding-bottom: none;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  
}

.input-container {
  display: flex;

}

.icon {
  padding-top: 3%;
  outline: none;
  background: deepskyblue;
  color: white;
  min-width: 50px;
  text-align: center;
}


</style>
	

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
<div class="TeacherRegisterBody">
	<form action="Teacher register.php" method="post">
		<div class="container">

			<div class="row">
				<div class="col-lg-6">

					<div class="TeacherRegisterBox">
						<form>
							<div>
								<div class="row">
									<h3 style="color:deepskyblue;margin-bottom: 7%;">Teacher Registration</h3>
									<p class="lead">Name</p>

									<div class="col-lg-5">
										<input type="text" name="last_name" id="TeacherRegisterInput" placeholder="Last Name" required="" maxlength="15">									
									</div>

									<div class="col-lg-5">
										<input type="text" name="first_name" id="TeacherRegisterInput" placeholder="First Name" required="" maxlength="15">									
									</div>

									<div class="col-lg-2">
										<input type="text" name="middle_initial" id="TeacherRegisterInput" placeholder="M.I" required="" minlength="1" maxlength="4" style="width:75%;">							
									</div>
								</div>
							</div>

						
							<p class="lead">Contact Number</p>
							<div class="input-container">
								<i class="fa fa-mobile icon"></i>
								<input type="tel" name="contact_number" id="TeacherRegisterInput" placeholder="Enter your Phone Number" required="" minlength="11" maxlength="12">					
							</div>
							<br>
							<p class="lead">E-mail</p>
							<div class="input-container">
								<i class="fa fa-envelope icon"></i>
								<input type="email" name="email" id="TeacherRegisterInput" placeholder="Enter your E-mail" required="" minlength="9" maxlength="25">
								
							</div>
							<br>

							<p class="lead">Birth date</p>
							<div class="input-container">
								<i class="fa fa-calendar icon"></i>
								<input type="date" name="birth_date" id="TeacherRegisterInput" placeholder="Enter your E-mail" required="">						
							</div>

							<br>
							<p class="lead">Teacher ID Number</p>
							<div class="input-container">
								<i class="fa fa-calendar icon"></i>
								<input type="tel" name="teacher_id_number" id="TeacherRegisterInput" placeholder="Teacher ID Number" required="" minlength="" maxlength="">	
							</div>						
					</div>


				</div>

				
				<div class="col-lg-6">
					<div class="TeacherRegisterBox">
							
							<p class="lead">Username</p>
							<div class="input-container">
								
								<i class="fa fa-user icon"></i>
								<input type="text" class="input-field" name="user_name" id="TeacherRegisterInput" placeholder="Enter your username" required="" minlength="9" maxlength="13">	
							    
							</div>
							<br>

							<p class="lead">Password</p>
							<div class="input-container">

								<i class="fa fa-key icon"></i>
								<input type="password" name="password" id="password" placeholder="Enter your password" required="" onkeyup='check();' minlength="9" maxlength="13" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" style="width: 100%;padding: 2%;padding-left: 5%;">
							
							</div>								

							<input type="checkbox" onclick="myFunction()">
								 Show Password
								<div id="message">									
								<p class="lead">Password must contain the following:</p>

									<div class="row text-center">
										<div class="col-sm-6">
											<p id="letter" class="invalid">A lowercase letter</p>
  											<p id="capital" class="invalid">A capital (uppercase) letter</p>
										</div>

										<div class="col-sm-6">
											<p id="number" class="invalid">A number</p>
  											<p id="length" class="invalid">Minimum 8 characters</p>
										</div>
									</div>
								</div>

							<br>
							<p class="lead">Confirm Password</p>
							<div class="input-container">
								
								<i class="fa fa-key icon"></i>
								<input type="password" name="re_password" id="re_password" placeholder="Confirm your password" required="" onkeyup='check();' minlength="9" maxlength="13" style="width: 100%;padding: 2%;padding-left: 5%;">
								<span id='message1'></span>
							
							</div>
							<br>


							<!-- CONFIRM PASSWORD -->
							<script type="text/javascript">
								var check = function() {
								  if (document.getElementById('password').value ==
								    document.getElementById('re_password').value) {
								    document.getElementById('message1').style.color = 'green';
								    document.getElementById('message1').innerHTML = 'Password Match';
								  } else {
								    document.getElementById('message1').style.color = 'red';
								    document.getElementById('message1').innerHTML = 'Password did not match';
								  }
								}
							</script>
							<!-- CONFIRM PASSWORD END -->

							<div class="d-grid gap-2">
								<input type="submit" name="btnSubmit" href="" class="btn btn-primary" id="TeacherRegisterInput" value="Register Account" style="background: deepskyblue; outline: none; border: none;">
							</div>
							<br>

							<div class="text-center">
								<center><hr style="color:black;width: 75%;"></center>
								<p class="medium text-center">If you're already have an account. <a href="Teacher login.php" style="text-decoration: none;color: deepskyblue;">Login Account</a> Instead</p>	
							</div>
						</form>
					</div>
				</div>
			</div>
			
		</div>
		<form method="post">
	</div>



	

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
		<div class="container">
			<h5 class="text-center"><span style="color: #c4c4c4;">© 2021 Copyright:</span> www.asignatura.com.ph</h5>			
		</div>
	</div>




<script>

	
















	var myInput = document.getElementById("password");
	var letter = document.getElementById("letter");
	var capital = document.getElementById("capital");
	var number = document.getElementById("number");
	var length = document.getElementById("length");

	// When the user clicks on the password field, show the message box
	myInput.onfocus = function() {
	  document.getElementById("message").style.display = "block";
	}

	// When the user clicks outside of the password field, hide the message box
	myInput.onblur = function() {
	  document.getElementById("message").style.display = "none";
	}

	// When the user starts to type something inside the password field
	myInput.onkeyup = function() {
	  // Validate lowercase letters
	  var lowerCaseLetters = /[a-z]/g;
	  if(myInput.value.match(lowerCaseLetters)) {  
	    letter.classList.remove("invalid");
	    letter.classList.add("valid");
	  } else {
	    letter.classList.remove("valid");
	    letter.classList.add("invalid");
	  }
	  
	  // Validate capital letters
	  var upperCaseLetters = /[A-Z]/g;
	  if(myInput.value.match(upperCaseLetters)) {  
	    capital.classList.remove("invalid");
	    capital.classList.add("valid");
	  } else {
	    capital.classList.remove("valid");
	    capital.classList.add("invalid");
	  }

	  // Validate numbers
	  var numbers = /[0-9]/g;
	  if(myInput.value.match(numbers)) {  
	    number.classList.remove("invalid");
	    number.classList.add("valid");
	  } else {
	    number.classList.remove("valid");
	    number.classList.add("invalid");
	  }
	  
	  // Validate length
	  if(myInput.value.length >= 8) {
	    length.classList.remove("invalid");
	    length.classList.add("valid");
	  } else {
	    length.classList.remove("valid");
	    length.classList.add("invalid");
	  }
	}


	/*show password*/

	function myFunction() {
	  var x = document.getElementById("password");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }
	}
</script>

</body>
</html>