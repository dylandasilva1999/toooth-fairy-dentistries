<?php 

if(!empty($_POST)){
    
    $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

    if($mysqli->connect_error){
        die("Connection Error " . $mysqli->connect_errno . ":" . $mysqli->connect_error);
    }

    $sql = "INSERT INTO bookings (booking_room, booking_time_slot, patient, doctor) VALUES(
        '{$mysqli->real_escape_string($_POST['room'])}',
        '{$mysqli->real_escape_string($_POST['appointment-time'])}',
        '{$mysqli->real_escape_string($_POST['pat-full-info'])}',
        '{$mysqli->real_escape_string($_POST['doc-full-info'])}'
    )";
    
    $insert = $mysqli->query($sql);
    
    if($insert){
        echo 'Success {$mysqli->insert_id}'; 
    }else{
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    
    $mysqli->close();
    
    header("location: ../pages/calendar.php");
    
}
    

?>