<?php

    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "toooth_fairy_dentistries_db";
    $message = "";

    try{
        $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_POST['login'])){

            if(empty($_POST['username']) || empty($_POST['password'])){
                $message = '<p> All fields must be input </p>';
            
            } else {
                $query = 'SELECT * FROM users WHERE username = :username AND user_password = :password';
                $statement = $connect->prepare($query);
                $statement->execute(
                    array(
                        'username' => $_POST["username"],
                        'user_password' => $_POST["password"]
                    )
                );

                $count = $statement->rowCount();
                if($count > 0){
                    $_SESSION['username'] = $_POST["username"];
                    header("location: ../pages/dashboard.php");
                } else {
                    $message = "<p>Username or Password Incorrect!</p>";
                }
            }
        }
    }
    catch(PDOException $error){
        $message = $error->getMessage(); 
    }

?>