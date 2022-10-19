<?php 
require 'config/config.php' ;
require 'includes/form_handlers/createJoinClass_handler.php';
include("includes/classes/User.php");
include("includes/classes/User2.php");
include("includes/classes/Post.php");

   if(isset($_SESSION['username'])){
		 $userLoggedIn  = $_SESSION['username'];
		 $userLoggedIn2  = $_SESSION['username'];
		 $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$userLoggedIn'");
		 $user_details_query2 = mysqli_query($con, "SELECT * FROM createclass WHERE username = '$userLoggedIn2' ORDER BY id DESC");
		 $user = mysqli_fetch_array($user_details_query);
		 $user2 = mysqli_fetch_array($user_details_query2);
   }
   else{
   	header("Location:register.php");
   }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Asignatura</title>

	<!-- javaScripts -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="assets\js\createJoinClass.js"></script>
			<script src="assets/js/demo.js"></script>
			<script src="assets/js/jquery.jcrop.js"></script>
	    <script src="assets/js/jcrop_bits.js"></script>

	<!-- css -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets\css\styling.css">
		<link rel="stylesheet" type="text/css" href="assets\css\style.css">
		<!-- <link rel="shortcut icon" type="image/png" href="assets/images/background/graduation.png"> -->
		<link rel="stylesheet" href="assets/css/jquery.Jcrop.css" >
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

	<style type="text/css">
		
		.navBar{
			
			width: 100%;
			height: 15%;
			background-color: #455a64;
			border-bottom: 0.25em solid deepskyblue;
			/* display: block; */
			position: fixed;
			z-index: 10;			
		}

		.nav {
			float: right;
			margin-top: -3%;
			/*border: 2px solid black;*/
			width: 20%;
			
			
		}
		.nav a {			
			padding: 5%;
			color: #fff;
			text-decoration: none;
			font-size: 17px;
		}
		.nav a:hover {
			border-bottom: 1px solid deepskyblue;
		}	

		#postBtn, #assignmentBtn{
			font-size: medium;
			text-decoration: none;
		}	

		#assignment-upload-button, #post_button{
			color: #fff;
			background: deepskyblue;
		}

	</style>
  
  <div class="background"></div>


	<div class="navBar">
		<div class="container">
			<div class="logo">
				<a href="index.php" style="text-decoration: none">				
					<img src="../img/MNKLOGO.png" height="100px" width="auto">
				</a>
			</div>
			
		</div>

			

             <div class="icon">
					<div class="nav">
					
						<?php 
							//Unread notifications 
							$notifications = new User2($con, $userLoggedIn);
							$num_notifications = $notifications->getUnreadNumber();
						?>
					<a href="<?php echo $userLoggedIn; ?>">
									<?php echo $user['first_name'] ?>
									<span class="tooltiptext">Profile</span>
					</a>

					<a href="index.php"><i class="fas fa-home"></i>
							<span class="tooltiptext">Home</span>
							</a>
					
							<!-- <a href="javascript:void(0);" onclick="getDropdownData('<?php echo $userLoggedIn; ?>', 'notification')"><i class="fas fa-bell"></i>  
								<?php
								if($num_notifications > 0)
								echo '<span class="notification_badge" id="unread_notification">' . $num_notifications . '</span>';
								?>
							<span class="tooltiptext">Notifications</span>
							</a> -->
					<a href="createJoinClass.php"><i class="fas fa-plus"></i>
							<span class="tooltiptext">Create or Join Class</span>
							</a>
							<a href="includes/handlers/logout.php">
							<i class="fas fa-power-off"></i>
							<span class="tooltiptext">Logout</span>
							</a>
				</div>				
				</div>
			</div>

			<br><br><br><br>
			

	

	