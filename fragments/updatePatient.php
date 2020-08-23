<?php

if(!empty($_FILES['new-pat-profile'])){

    $path = "../assets/img/";
    $path = $path.basename($_FILES["new-pat-profile"]["name"]);
    if(move_uploaded_file($_FILES["new-pat-profile"]["tmp_name"], $path)){
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

    $patientID = $_GET['id'];
    $patientFullName = $_POST['pat-fullname'];
    $patientGender = $_POST['pat-gender'];
    $patientMedicalAidNum = $_POST['pat-medical-aid-num'];
    $patientMobileNum = $_POST['pat-mobile-num'];
    $patientEmail = $_POST['pat-email'];
    $patientAddress = $_POST['pat-address'];
    $patientProfileImg = $_FILES["new-pat-profile"]["name"];

    if($_FILES["new-pat-profile"]["error"] == 4){
        if($_POST['pat-gender'] == "Male") {
            $patientProfileImg = "default-male.jpg";
        } else {
            $patientProfileImg = "default-female.jpg";
        }
        
    } else {
        $patientProfileImg = $_FILES["new-pat-profile"]["name"];
    }
 
    $sql = "UPDATE patients SET patient_fullname = '$patientFullName', patient_gender ='$patientGender', patient_medical_aid_number ='$patientMedicalAidNum', patient_mobile_number ='$patientMobileNum', patient_email ='$patientEmail', patient_profile_image ='$patientProfileImg', patient_address = '$patientAddress' WHERE patient_id = '$patientID'";

    $update = $mysqli->query($sql);

    if($update){
        echo 'Update Profile Successful';
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }

    $mysqli->close();

    header("location: ../pages/patients.php");

}   