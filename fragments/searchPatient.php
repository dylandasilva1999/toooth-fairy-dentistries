<?php

    $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');
        
    if($mysqli->connect_error){
        die("connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
    }

    $query = $_GET['search'];
    
    $min_length = 3;

    if(strlen($query) >= $min_length) {
         
        $query = htmlspecialchars($query); 
         
        $query = $mysqli->real_escape_string($query);
         
        $raw_results = $mysqli->query("SELECT * FROM patients
            WHERE (`patient_medical_aid_number` LIKE '%".$query."%') OR (`patient_fullname` LIKE '%".$query."%')") or die(mysql_error());
         
        if(mysql_num_rows($raw_results) > 0) { 
            while($results = mysql_fetch_array($raw_results)){
             
                echo "<p><h3>".$results['patient_medical_aid_number']."</h3>".$results['patient_fullname']."</p>";
            } 
        }
        else{ 
            echo "No results";
        } 
    }
    else { 
        echo "Minimum length is ".$min_length;
    }

?>