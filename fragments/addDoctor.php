<?php 

    if(!empty($_FILES['doc-profile'])){

        $path = "../img/";
        $path = $path.basename($_FILES["doc-profile"]["name"]);
        if(move_uploaded_file($_FILES["doc-profile"]["tmp_name"], $path)){
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

        if($_FILES["doc-profile"]["error"] == 4){
            if($_POST['doc-gender'] == "Male") {
                $docProfilePicture = "default-male.jpg";
            } else {
                $docProfilePicture = "default-female.jpg";
            }
            
        } else {
            $docProfilePicture = $_FILES["doc-profile"]["name"];
        }

        $sql = "INSERT INTO doctors (doctor_full_name, doctor_gender, doctor_address, doctor_specialisation, doctor_profile_image) VALUES (
            '{$mysqli->real_escape_string($_POST['doc-fullname'])}',
            '{$mysqli->real_escape_string($_POST['doc-gender'])}',
            '{$mysqli->real_escape_string($_POST['doc-address'])}',
            '{$mysqli->real_escape_string($_POST['doc-specialisation'])}', 
            '{$docProfilePicture}'
        )";

        $insert = $mysqli->query($sql);

        if($insert){
            echo "Added Doctor";
        } else{
            die("Error: {$mysqli->errno} : {$mysqli->error}");
        }

        $mysqli->close();

        header("location: ../pages/doctors.php");

    }   

?>