<?php 

    require "connection.php" ;


    if(!empty($_POST['reg-username']) || !empty($_POST['reg-password']) || !empty($_POST['reg-email']) || !empty($_FILES['user-profile']) || !empty($_POST['reg-gender'])){

        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

        if($mysqli->connect_error){
            die("Connection Error " . $mysqli->connect_errno . ":" . $mysqli->connect_error);
        }

        $path = "../assets/img/";
        $path = $path.basename($_FILES["user-profile"]["name"]);
        if(move_uploaded_file($_FILES["user-profile"]["tmp_name"], $path)){
            echo "The file has been uploaded";
        } else {
            echo "The file has not been uploaded";
        }

        $userProfile = $_FILES["user-profile"]["name"];
        $userName = $_POST['reg-username'];

        $checkQuery = "SELECT * FROM users WHERE username = '$userName'";
        $userResult = mysqli_query($mysqli, $checkQuery);

        if(mysqli_num_rows($userResult) > 0){
            $message = "This username is already in use";
        } else {

            $sql = "INSERT INTO users (username, user_gender, user_profile_image, user_email, user_password) VALUES (
                '{$mysqli->real_escape_string($_POST['reg-username'])}',
                '{$mysqli->real_escape_string($_POST['reg-gender'])}',
                '{$userProfile}', 
                '{$mysqli->real_escape_string($_POST['reg-email'])}',
                '{$mysqli->real_escape_string($_POST['reg-password'])}' 
            )";

            $insert = $mysqli->query($sql);

            if($insert){
                echo "Added user!";
            } else{
                die("Error: {$mysqli->errno} : {$mysqli->error}");
            }

            $mysqli->close();

        }

        header("location: ../login.php");

    } //END OF IF STATEMENT

?>