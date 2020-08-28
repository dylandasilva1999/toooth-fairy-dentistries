<?php 

require 'updateUser.php' ;

function editUser(){

    $id = $_GET['id'];

    $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

    if($mysqli->connect_error){
        die("Connection Error " . $mysqli->connect_errno . ":" . $mysqli->connect_error);
    }

    $userUpdate = "SELECT * FROM users WHERE user_id = $id";

    if($result = $mysqli->query($userUpdate)){
        
        while($row = $result->fetch_assoc()){

            $userID = $row['user_id'];
            $username = $row['username'];
            $userGender = $row['user_gender'];
            $userEmail = $row['user_email'];
            $userProfileImg = $row['user_profile_image'];
            $userPassword = $row['user_password'];

            echo '
            <div class="card">
                <div class="form-container edit-container">
                    <form enctype="multipart/form-data" method="post" action="updateUser.php?id='.$userID.'" class="input-sign-up-form">
                        <h1 id="add-text">Edit Profile Details</h1>
                        <img class="current-profile-image" name="user-profile" src="../assets/img/'.$userProfileImg.'" required>
                        <input type="file" name="new-user-profile" class="upload-profile" src="../assets/img/'.$userProfileImg.'">
                        <p id="p-text">Change Username</p>
                        <input type="text" name="user-username" value="'.$username.'">
                        <p id="p-text">Change User Gender</p>
                        <select name="user-gender" id="user-gender" value="'.$userGender.'">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <p id="p-text-add">Change User Email</p>
                        <input type="text" name="user-email" value="'.$userEmail.'">
                        <p id="p-text-spec">Change User Password</p>  
                        <input type="text" name="user-password" value="'.$userPassword.'">
                        <button class="edit-doctor-btn" type="submit">Update Profile</button>
                    </form>
                </div> <!--Edit Doctor Container-->
            </div>
            ';
        } 
        $result->free();
    }
}

?>

<html>
    <head>
        <!-- WEBSITE TITLE -->
        <title>TFD | Edit Profile</title>
        <link rel="icon" href="../assets/img/Logo.svg">

        <!-- STYLESHEET CSS -->
        <link rel="stylesheet" href="../assets/css/edit.css">
    </head>
    <body>
    <?php editUser(); ?>
    </body>
</html>        
