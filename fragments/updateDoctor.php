<?php

if(!empty($_FILES['new-doc-profile'])){

    $path = "../assets/img/";
    $path = $path.basename($_FILES["new-doc-profile"]["name"]);
    if(move_uploaded_file($_FILES["new-doc-profile"]["tmp_name"], $path)){
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

    $doctorID = $_GET['id'];
    $doctorFullName = $_POST['doc-fullname'];
    $doctorGender = $_POST['doc-gender'];
    $doctorAddress = $_POST['doc-address'];
    $doctorSpecialisation = $_POST['doc-specialisation'];
    $doctorProfileImg = $_FILES["new-doc-profile"]["name"];

    if($_FILES["new-doc-profile"]["error"] == 4){
        if($_POST['doc-gender'] == "Male") {
            $doctorProfileImg = "default-male.jpg";
        } else {
            $doctorProfileImg = "default-female.jpg";
        }
        
    } else {
        $doctorProfileImg = $_FILES["new-doc-profile"]["name"];
    }
 
    $sql = "UPDATE doctors SET doctor_full_name = '$doctorFullName', doctor_gender ='$doctorGender', doctor_profile_image ='$doctorProfileImg', doctor_address = '$doctorAddress', doctor_specialisation = '$doctorSpecialisation' WHERE doctor_id = '$doctorID'";

    $update = $mysqli->query($sql);

    if($update){
        echo 'Update Profile Successful';
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }

    $mysqli->close();

    header("location: ../pages/doctors.php");

}   