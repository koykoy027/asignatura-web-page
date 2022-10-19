<?php 
include("header.php");
require 'config/config.php' ;
require 'includes/form_handlers/createJoinClass_handler.php';
?>

<?php 
        
        if(isset($_POST['joinClass_button'])) {
        	echo '
             <script>
               $(document).ready(function(){
                 $("#first").hide();
                 $("#second").show();
               });
             </script>
        	';
        }
	 ?>

<div class="bg">
    <div>

        <div class="creatClass_box" style="margin-top: 20%;">

			
            <div id="first">

                <div class="creatClassHeader">
                    <h1>Create Class</h1>
                </div>


                <br><br>
			   <form action="createJoinClass.php" method="POST">
					<input type="text" name="className" autocomplete="off" placeholder="Class Name / Subject Name" value = "<?php 
					// if(isset($_SESSION['className'])){
				    //    echo $_SESSION['className'];
					// } 
					?>" >
				   	<br>

                    <input type="text" name="subject" autocomplete="off" placeholder="Subject Code" value = "<?php 
                    // if(isset($_SESSION['subject'])){
                    //    echo $_SESSION['subject'];
                    // } 
                    ?>" >

				    <input type="text" name="section" autocomplete="off" placeholder="Year and Section" value = "<?php 
					// if(isset($_SESSION['section'])){
				    //    echo $_SESSION['section'];
					// } 
					?>" >
				    <br>
				    <br>

                    <button id ="btn-design" type="sumbit" name="createClass_button">Create</button>
                    <button class="cancel_btn"><a href="index.php" style="text-decoration: none;">Cancel</a></button>
				    
	                <br>
                    <br>
                    <a href="#" id="joinClass" class="joinClass">Want to join a Class? Click Here</a>
		     		 </form>
             </div>
             
             <div id="second">
                    <div class="joinClass_header">
                        <h1>Join class</h1>
                    </div>
                        <br>
                        <form action="createJoinClass.php" method="POST">
                                <input type="text" name="code" placeholder="Class code" autocomplete="off" value = "<?php 
                                if(isset($_SESSION['code'])){
                                echo $_SESSION['code'];
                                } 
                                ?>">
                                <br>
                                <button  type="sumbit" name="joinClass_button" id="btn-design">Join</button>
                                <button class="cancel_btn" ><a href="index.php">Cancel</a></button>
                                
                                
                                <br>
                                <br>
                                <a href="#" id="createClass" class="createClass">Want to create a new Class? Click here!</a>
                                </form>
                   
            </div>
     </div>
 </div>
</div>   

 

</body>
</html>