<?php 

require 'updateDoctor.php' ;

function editDoctor(){

    $id = $_GET['id'];

    $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

    if($mysqli->connect_error){
        die("Connection Error " . $mysqli->connect_errno . ":" . $mysqli->connect_error);
    }

    $doctorUpdate = "SELECT * FROM doctors WHERE doctor_id = $id";

    if($result = $mysqli->query($doctorUpdate)){
        
        while($row = $result->fetch_assoc()){

            $doctorID = $row['doctor_id'];
            $doctorFullName = $row['doctor_full_name'];
            $doctorGender= $row['doctor_gender'];
            $doctorAddress = $row['doctor_address'];
            $doctorSpecialisation = $row['doctor_specialisation'];
            $doctorProfileImg = $row['doctor_profile_image'];

            echo '
                <div class="form-container edit-container">
                    <form enctype="multipart/form-data" method="post" action="updateDoctor.php?id='.$doctorID.'" class="input-sign-up-form">
                        <h1 id="add-text">Edit Doctor Details</h1>
                        <img class="current-profile-image" name="doc-profile" src="../assets/img/'.$doctorProfileImg.'" required>
                        <input type="file" name="new-doc-profile" class="upload-profile" src="../assets/img/'.$doctorProfileImg.'">
                        <p id="p-text">Change Doctor Name</p>
                        <input type="text" name="doc-fullname" value="'.$doctorFullName.'">
                        <p id="p-text">Change Doctor Gender</p>
                        <select name="doc-gender" id="doc-gender" value="'.$doctorGender.'">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <p id="p-text-add">Change Doctor Address</p>
                        <input type="text" name="doc-address" value="'.$doctorAddress.'">
                        <p id="p-text-spec">Change Doctor Specialisation</p>  
                        <select name="doc-specialisation" id="doc-specialisation" value="'.$doctorSpecialisation.'"> 
                            <option value="Teeth Whitening">Teeth Whitening</option>
                            <option value="Hygienist">Hygienist</option>
                            <option value="Orthodontist">Orthodontist</option>
                            <option value="Dentist">Dentist</option>
                        </select>
                        <button class="edit-doctor-btn" type="submit">Update Profile</button>
                    </form>
                </div> <!--Edit Doctor Container-->
            ';
        } 
        $result->free();
    }
}

?>

<html>
    <head>
        <!-- WEBSITE TITLE -->
        <title>TFD | Edit Doctor</title>
        <link rel="icon" href="../assets/img/Logo.svg">

        <!-- STYLESHEET CSS -->
        <link rel="stylesheet" href="../assets/css/edit.css">
    </head>
    <body>
    <?php editDoctor(); ?>
    </body>
</html>        
