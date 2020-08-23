<?php 
    session_start();
    if(isset($_SESSION['username'])){
        echo '<h1>WELCOME <br> BACK ' .$_SESSION['username']. '</h1>';
    }
?>