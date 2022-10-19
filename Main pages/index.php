<?php 
include("header.php");


$ooo = "";
$username = $user['username'];
$userCode = $user2['courseCode'];
$post = new Post($con, $username, $userCode);
$checkTeaching = $post->checkTeachingClass();
$checkEnrolled = $post->checkEnrolledClass();
?>






<div class="container">


    <!-- <div class="wrapper"> -->

        <!-- <div style="margin-bottom: 10%;"></div> -->

        <div>
            
                <?php 
          if ($checkTeaching == true) {
               echo "<div class='teaching'>
             <h3><p class='classHeader'>Class</p></h3>";
             
               $post->loadTeachingClasses();

               
               echo "</div>";
          }

          if ($checkEnrolled == true) {
               echo "<div class='enrolled'>
             <h3><p class='classHeader' style='background:#00b4d8;'>Class enrolled</p></h3>";
               $post->loadEnrolledClasses();
               echo "</div>";
          }
          if (($checkEnrolled == false) && ($checkTeaching == false)) {
               echo "<div id='null-enrolled'>
                         <p class='lead'>It seems you haven't created or enrolled in any class yet!</p>
                         <p class='lead'>Click the button below or <i class='fas fa-plus' style='padding:0.4rem; color:inherit'></i> above to start with your class</p>
                         
     <a href='createJoinClass.php' style='text-decoration: none;'>
     <button class='null-btn'>Get started</button></a>
                     </div>";
          }
          ?>
            
            
        </div>

        
        

        

        





    <!-- </div> -->
</div>


</body>

</html> 