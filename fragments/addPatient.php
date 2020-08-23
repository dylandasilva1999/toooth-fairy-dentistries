<?php 

    if(!empty($_FILES['pat-profile'])){

        $path = "../img/";
        $path = $path.basename($_FILES["pat-profile"]["name"]);
        if(move_uploaded_file($_FILES["pat-profile"]["tmp_name"], $path)){
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

        if($_FILES["pat-profile"]["error"] == 4){
            if($_POST['pat-gender'] == "Male") {
                $patProfilePicture = "default-male.jpg";
            } else {
                $patProfilePicture = "default-female.jpg";
            }
            
        } else {
            $patProfilePicture = $_FILES["pat-profile"]["name"];
        }

        $sql = "INSERT INTO patients (patient_fullname, patient_address, patient_medical_aid_number, patient_mobile_number, patient_email, patient_gender, patient_profile_image) VALUES (
            '{$mysqli->real_escape_string($_POST['pat-fullname'])}',
            '{$mysqli->real_escape_string($_POST['pat-address'])}',
            '{$mysqli->real_escape_string($_POST['pat-medical-aid-number'])}',
            '{$mysqli->real_escape_string($_POST['pat-mobile-number'])}',
            '{$mysqli->real_escape_string($_POST['pat-email'])}',
            '{$mysqli->real_escape_string($_POST['pat-gender'])}',
            '{$patProfilePicture}'
        )";

        $insert = $mysqli->query($sql);

        if($insert){
            echo "Added Patient";
        } else{
            die("Error: {$mysqli->errno} : {$mysqli->error}");
        }

        $mysqli->close();

        header("location: ../pages/patients.php");

    }   

?>