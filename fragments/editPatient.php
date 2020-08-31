<?php 

require 'updatePatient.php' ;

function editPatient(){

    $id = $_GET['id'];

    $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

    if($mysqli->connect_error){
        die("Connection Error " . $mysqli->connect_errno . ":" . $mysqli->connect_error);
    }

    $patientUpdate = "SELECT * FROM patients WHERE patient_id = $id";

    if($result = $mysqli->query($patientUpdate)){
        
        while($row = $result->fetch_assoc()){

            $patientID = $row['patient_id'];
            $patientFullName = $row['patient_fullname'];
            $patientGender= $row['patient_gender'];
            $patientMedicalAidNum = $row['patient_medical_aid_number'];
            $patientMobileNum= $row['patient_mobile_number'];
            $patientEmail = $row['patient_email'];
            $patientAddress = $row['patient_address'];
            $patientProfileImg = $row['patient_profile_image'];

            echo '
                <div class="form-container edit-container-two">
                    <form enctype="multipart/form-data" method="post" action="updatePatient.php?id='.$patientID.'" class="input-sign-up-form edit-container-patient">
                        <h1 id="add-text">Edit Patient Details</h1>
                        <img class="current-profile-image" name="pat-profile" src="../assets/img/'.$patientProfileImg.'">
                        <input type="file" name="new-pat-profile" class="upload-profile" src="../assets/img/'.$patientProfileImg.'">
                        <p id="p-text">Change Patient Name</p>
                        <input type="text" name="pat-fullname" value="'.$patientFullName.'">
                        <p id="p-text">Change Patient Gender</p>
                        <select name="pat-gender" id="pat-gender" value="'.$patientGender.'">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <p id="p-text-add">Change Patient Medical Aid Number</p>
                        <input type="text" name="pat-medical-aid-num" value="'.$patientMedicalAidNum.'">
                        <p id="p-text-add">Change Patient Mobile Number</p>
                        <input type="text" name="pat-mobile-num" value="'.$patientMobileNum.'">
                        <p id="p-text-add">Change Patient Email</p>
                        <input type="text" name="pat-email" value="'.$patientEmail.'">
                        <p id="p-text-add">Change Patient Address</p>
                        <input type="text" name="pat-address" value="'.$patientAddress.'">
                        <button class="edit-patient-btn" type="submit">Update Profile</button>
                    </form>
                </div> <!--Edit Patient Container-->
            ';
        } 
        $result->free();
    }
}

?>

<html>
    <head>
        <!-- WEBSITE TITLE -->
        <title>TFD | Edit Patient</title>
        <link rel="icon" href="../assets/img/Logo.svg">

        <!-- STYLESHEET CSS -->
        <link rel="stylesheet" href="../assets/css/edit.css">
    </head>
    <body>
    <?php editPatient(); ?>
    </body>
</html>        
