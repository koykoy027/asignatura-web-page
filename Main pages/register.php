<?php 


require 'config/config.php';

require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asignatura | Sign in</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="shortcut icon" type="image/png" href="assets/images/background/graduation.png">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="overflow-y: hidden;">

    <style type="text/css">
        
        #inputDesign{
            padding: 4%;
            outline: none;
            margin-bottom: 3%;
            
        }

        #inputDesign:focus{
            border: 1px solid deepskyblue;
        }
        

        button[name="login_button"],[name="register_button"]{
            width: 70%;
        }

        .loginHeader{
            text-align: center;
            width: 100%;
            height: 20%;            
            background-color: deepskyblue;
            color: #fff;
            padding: 3%;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
            margin-bottom: 5%;          
        }

        .loginBox{
            position: absolute;
            margin: 0 auto;
            top: 50%;
            left: 50%;
            width: 30%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            border: 1px solid #ededed;
            border-radius: 10px;
            padding: 5px;
            opacity: 0.93;
            min-width: 50px;
}
        }
    </style>


    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <img src="../img/MNKLOGO.png" height="100px" width="250px">
            </a>
        </div>
    </nav>




    <?php 

    // include("header.php");

    if (isset($_POST['register_button'])) {
        echo '
             <script>
               $(document).ready(function(){
                 $("#first").show();
                 $("#second").hide();
               });
             </script>
        	';
    }
    ?>

    <div class="wrapper">
        <div class="landing">
            <h1 class="brand">Asignatura</h1>
            <div class="landing__bg"></div>
            <div class="content">
                <h1>Join Your Class From Anywhere Anytime</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae blanditiis atque perferendis suscipit,
                    quae quibusdam consequuntur magni voluptatibus quidem rerum?</p>
                <span id="landing-btn">Login/SignUp</span>
            </div>
        </div>
        <div class="loginBox">
            <div class="loginHeader">
                <h1>Welcome to Asignatura</h1>
                
            </div>

            <div id="first">
                <h3 style="margin-left: 15%;">SIGN IN</h3>
                <br>
                <form action="register.php" method="POST" id="login-form">



                    
                            <input id="inputDesign" type="email" name="log_email" placeholder="Email address" value="<?php 
                                                                                            if (isset($_SESSION['log_email'])) {
                                                                                                echo $_SESSION['log_email'];
                                                                                            }
                                                                                            ?>" required>

                        
                    
                    <br>

                    <input id="inputDesign" type="password" name="log_password" placeholder="Password">
                    <br>
                    <?php if (in_array("Email or password was incorrect<br>", $error_array)) echo "<span style='color:red; font-size:0.78rem;'>Email or password was incorrect<br><br></span>"; ?>

                    <button class="btn btn-outline-primary btn-lg" name="login_button">Sign in</button>
                    <!-- <input type="submit" name="login_button" id="button" value="Login"> -->
                    <br><br>

                    <p class="medium text-center">Don't have account yet ? <a href="#" id="signup" class="signup" style="text-decoration: none;color: deepskyblue;">Sign up</a> here</p>
                    

                </form>

            </div>


            <div id="second">
                <h3 style="margin-left: 15%;">SIGN UP</h3>
                <br>
                <form action="register.php" method="POST" id="register-form">
                    <input id="inputDesign" type="text" name="reg_fname" placeholder="First name" value="<?php 
                                                                                        if (isset($_SESSION['reg_fname'])) {
                                                                                            echo $_SESSION['reg_fname'];
                                                                                        } ?>" required>

                    <br>

                    <?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; ?>

                    <input id="inputDesign" type="text" name="reg_lname" placeholder="Last name" value="<?php 
                                                                                        if (isset($_SESSION['reg_lname'])) {
                                                                                            echo $_SESSION['reg_lname'];
                                                                                        } ?>" required>
                    <br>


                    <input id="inputDesign" type="email" name="reg_email" placeholder="Email" value="<?php 
                                                                                    if (isset($_SESSION['reg_email'])) {
                                                                                        echo $_SESSION['reg_email'];                                                                                        
                                                                                    } ?>" required>
                    <br>

                    <input id="inputDesign" type="email" name="reg_email2" placeholder="Confirm email" value="<?php 
                                                                                                if (isset($_SESSION['reg_email2'])) {
                                                                                                    echo $_SESSION['reg_email2'];
                                                                                                } ?>" required>
                    <br>

                    <?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
                   
                    else if (in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
                                    
                    else if (in_array("Email do not match<br>", $error_array)) echo '<script>alert("Email do not match")</script>';
                        ?>

                    

                    <input id="inputDesign" type="password" name="reg_password" placeholder="Password" required>
                    <br>
                    <input id="inputDesign" type="password" name="reg_password2" placeholder="Confirm password" required>
                    <br>

                    <?php if (in_array("Your password do not match<br>", $error_array)) echo '<script>alert("Your password do not match")</script>'; ?>
                    <button class="btn btn-outline-primary btn-lg" name="register_button">Sign up</button>                  
                    <br>
                    <br>
                    <?php if (in_array("<span style = 'color: #14C800;'> You're all set! Go ahead and login! </span> <br>", $error_array)) echo "<span style = 'color: #14C800;'> You're all set! Go ahead and login! </span> <br>"; ?>

                    <p class="medium text-center">Already have account ? <a href="#" id="signin" class="signin" id="signup" class="signup" style="text-decoration: none;color: deepskyblue;">Sign in</a> here</p>
                    

                </form>
            </div>

        </div>
    </div>

    </script>

    
    <script>
        const landingPage = document.querySelector('.landing');
        const landingBtn = document.querySelector('#landing-btn');
        landingBtn.addEventListener('click', () => {
            landingPage.classList.add('animated', 'slideOutUp');
        });

        $(document).ready(function() {
   
        //on click signup, hide login and show registration form
        $("#signup").click(function()  {
            $("#first").slideUp("slow", function(){
                $("#second").slideDown("slow");
                });
            });
            //on click signup, hide registertion form and login form
                $("#signin").click(function() {
                    $("#second").slideUp("slow", function(){
                        $("#first").slideDown("slow");
                });
            });

        });
    </script>


    
 

</body>

</html> 