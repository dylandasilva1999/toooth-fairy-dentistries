<?php 

    $id = $_GET['id'];

    $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

    if($mysqli->connect_error){
        die("Connection Error " . $mysqli->connect_errno . ":" . $mysqli->connect_error);
    }

    $sql = "DELETE FROM doctors WHERE doctor_id = $id";

    if(mysqli_query($mysqli, $sql)){
        mysqli_close($mysqli);
        header('location: ../pages/doctors.php');
        exit;
    } else{
        echo "Did not remove";
    }

?>