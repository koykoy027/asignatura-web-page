<?php 
include("header.php");
$username = "";
$userFullName = " ";
$email = " ";
$firstName = "";
$lastName  = "";
$phoneNumber = "";
$bio = "";
$code = "";
$profilePic= "";

if (isset($_GET['profile_username'])) {
    $username = $_GET['profile_username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
    $user_array = mysqli_fetch_array($user_details_query);
    $userFullName = $user_array['first_name'] . " " . $user_array['last_name'];
    $email = $user_array['email'];
    $firstName = $user_array['first_name'];
    $lastName = $user_array['last_name'];
    $phoneNumber = $user_array['phoneNumber'];
    $bio = $user_array['bio'];
    $profilePic = $user_array['profilePic'];
}
if (isset($_POST['profile-updateBtn'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $bio = $_POST['bio'];
    $query = mysqli_query($con, "UPDATE users SET first_name ='$firstName' WHERE username LIKE '$username'");
    $query1 = mysqli_query($con, "UPDATE users SET last_name ='$lastName' WHERE username LIKE '$username'");
    $query2 = mysqli_query($con, "UPDATE users SET phoneNumber ='$phoneNumber' WHERE username LIKE '$username'");
    $query3 = mysqli_query($con, "UPDATE users SET bio  ='$bio' WHERE username LIKE '$username'");
    header("Location: $username");
}

$teaching  = new User($con,$code ,$username);
$query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
$row = mysqli_fetch_array($query);

$editBtn = "";
if(isset($_SESSION['username'])){
    $userLoggedIn = $_SESSION['username'];
    if($userLoggedIn == $username){
        $editBtn = '<div class="edit-btn" onclick="openEdit()"><i class="fas fa-edit"></i>Edit</div>';
    }
    
};
?>


<style type="text/css">
    #inputDesign{
            padding: 2%;
            outline: none;
            margin-bottom: 1%;
            font-family: sans-serif;
            
        }

        #inputDesign:focus{
            border: 1px solid deepskyblue;
        }

        .titles{
            font-size: large;
        }

</style>

<main class="profile-body">
    <br><br><br><br><br>
    <div class="backdrop"></div>
    <div class="modal">
        <form action=<?php echo $username; ?> method="POST">
            <label for="First Name">First name:</label>
            <input type="text" name="firstName" id="inputDesign" value=<?php echo $firstName; ?> autocomplete="off">
            <label for="Last Name">Last name:</label>
            <input type="text" name="lastName" id="inputDesign" value=<?php echo $lastName; ?> autocomplete="off">
            <label for="Email">Email:</label>
            <input type="email" name="Email" id="inputDesign" disabled value=<?php echo $email; ?>>
            <label for="Phone">Phone:</label>
            <span>+639</span><input type="int" name="phoneNumber" id="inputDesign" value=<?php echo $phoneNumber; ?> autofocus autocomplete="off">
            <label for="Bio">Bio:</label>
            <textarea type="text" name="bio" id="inputDesign" cols="30" rows="10" class="bio"><?php echo $bio; ?></textarea>
            <div>
                <input type="submit" value="Update" class="profile-updateBtn" name="profile-updateBtn">
                <div class="closeBtn" onclick="closeModal()">Cancel</div>
                
            </div>
        </form>

    </div>
    <section class="side-bar">
        <br><br>
        <div class="profile__image">
            <br>
            
            <a href="upload.php"> <img src="<?php echo $profilePic; ?>"> </a>
        </div>
        <br>
        <a href="upload.php">Add a new profile picture </a>
        <br>
        <p>username:&nbsp;&nbsp; <?php echo  $username; ?></p>
    </section>
    <section class="profile">
        <br>
        <span class="titles">Name:</span>
        <p class="lead">&nbsp;&nbsp; <?php echo $userFullName; ?></p>
        <span class="titles">Email:</span>
        <p class="lead">&nbsp;&nbsp; <?php echo $email; ?></p>
        <span class="titles">Phone:</span>
        <p class="lead">&nbsp;&nbsp; +639&nbsp;<?php echo $phoneNumber; ?></p>
        <span class="titles">Bio: </span>
        <p class="lead">&nbsp;&nbsp;<?php echo $bio; ?></p>
        <?php echo $editBtn ?>
        <br>
    </section>
    <div class="clear"></div>
</main>


<script>
    function reloadPage() {
        location.reload(true);
    }

    function openEdit() {
        document.querySelector('.profile-body .modal').style.display = 'block';
        document.querySelector('.backdrop').style.display = 'block';
    }

    function closeModal() {
        document.querySelector('.profile-body .modal').style.display = 'none'
        document.querySelector('.backdrop').style.display = 'none'
    }
</script>
</body>

</html> 