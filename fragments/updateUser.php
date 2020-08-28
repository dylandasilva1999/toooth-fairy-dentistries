<?php

if(!empty($_FILES['new-user-profile'])){

    $path = "../assets/img/";
    $path = $path.basename($_FILES["new-user-profile"]["name"]);
    if(move_uploaded_file($_FILES["new-user-profile"]["tmp_name"], $path)){
        echo "The file has been uploaded";
    } else {
        echo "The file has not been uploaded";
    }
}

if(!empty($_POST)){

    $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

    if($mysqli->connect_error){
        die("Connection Error " . $mysqli->connect_errno . ":" . $mysqli->connect_error);
    }

    $userID  = $_GET['id'];
    $username = $_POST['user-username'];
    $userGender = $_POST['user-gender'];
    $userEmail = $_POST['user-email'];
    $userProfileImg = $_FILES["new-user-profile"]["name"];
    $userPassword = $_POST['user-password'];

    if($_FILES["new-user-profile"]["error"] == 4){
        if($_POST['user-gender'] == "Male") {
            $userProfileImg = "default-male.jpg";
        } else {
            $userProfileImg = "default-female.jpg";
        }
        
    } else {
        $userProfileImg = $_FILES["new-user-profile"]["name"];
    }
 
    $sql = "UPDATE users SET username = '$username', user_gender ='$userGender', user_email ='$userEmail', user_password = '$userPassword ', user_profile_image = '$userProfileImg' WHERE user_id = '$userID'";

    $update = $mysqli->query($sql);

    if($update){
        echo 'Update Profile Successful';
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }

    $mysqli->close();

    header("location: ../pages/profile.php");

}   