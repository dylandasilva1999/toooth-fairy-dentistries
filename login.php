<?php require 'fragments/connection.php' ?>

<!DOCTYPE html>
<html>

    <head>
        
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name="description" content="This is an administration portal for a receptionist at a dentistry company called Toooth Fairy Dentistries">
        <meta name="keywords" content="Dentistries, Tooth Fairy, Teeth, Shiny, White">
        <meta name="author" content="Dylan da Silva">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
        
        <!-- WEBSITE TITLE -->
        <title>TFD | Sign In/ Sign Up</title>
        <link rel="icon" href="./assets/img//Logo.svg">
        
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
        
        <!-- BOOTSTRAP AND PAPER KIT-->
        <link rel="stylesheet" href="./assets/css/paper-kit.css">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">    
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="./assets/css/index.css">
        
    </head>
    
    <body>

        <!-- MAIN -->
        <main>

            <div class="container main-container" id="container">
                <div class="form-container sign-up-container">
                    <form enctype="multipart/form-data" method="post" action="./fragments/registerUser.php" class="input-sign-up-form">
                        <h1>Create Account</h1>
                        <div class="social-container">
                            <a href="http://account.google.com/" class="social google-icon"></a>
                            <a href="https://mtouch.facebook.com/login/" class="social facebook-icon"></a>
                            <a href="https://za.pinterest.com/login/" class="social pinterest-icon"></a>
                        </div>
                        <span id="details-sign-up-text">or use your email for registration</span>
                        <i class="fa fa-user icon user-sign-up"></i>
                        <input type="text" name="reg-username" placeholder="Username" />
                        <i class="fa fa-envelope icon envelope-sign-up"></i> 
                        <input type="email" name="reg-email" placeholder="Email"  />
                        <i class="far fa-eye icon password-icon-sign-up" id="togglePassword"></i>
                        <input type="password" name="reg-password" id="reg-password" placeholder="Password" />
                        <input type="file" name="user-profile" class="upload-profile">
                        <select class="gender" id="gender" name="reg-gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        <button class="sign-up-btn-form">Sign Up</button>
                    </form>
                </div> <!--Sign Up Container-->
                <div class="sign-in-container form-container">
                    <form method="post">
                        <h1>Sign In</h1>
                        <div class="social-container">
                            <a href="http://account.google.com/" class="social google-icon"></a>
                            <a href="https://mtouch.facebook.com/login/" class="social facebook-icon"></a>
                            <a href="https://za.pinterest.com/login/" class="social pinterest-icon"></a>
                        </div>
                        <span id="details-sign-in-text">or use your account</span>
                        <i class="fa fa-user icon user-sign-in"></i>
                        <input type="text" name="username" placeholder="Username" required/>
                        <i class="far fa-eye icon password-icon-sign-in" id="togglePassword"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                        <a href="#" id="forgot-password-text">Forgot your password?</a>
                        <button class="sign-in-btn-form" type="submit" name="login">Log In</button>
                    </form>
                </div> <!--Sign In Container-->
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <div class="logo-sign-in"></div>
                            <p id="welcome-text">Welcome back to</p>
                            <h1 id="logo-text">Toooth Fairy<br>Dentistries</h1>
                            <p id="login-text">
                                Enter in your details to view your profile
                            </p>
                            <button class="sign-in-btn" id="signIn">Log In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <div class="logo-sign-up"></div>
                            <p id="user-text">Are you a new user?</p>
                            <h1 id="user-join-text">If yes, Join us!</h1>
                            <p id="description">Enter your personal details and start your <br>journey with us</p>
                            <button class="sign-up-btn" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div> <!--Overlay Container-->
            </div> <!--Sign In Sign Up Main Container-->

        </main>
        <!-- END OF MAIN -->

    </body>

    <!-- JAVASCRIPT -->
    <script src="./assets/js/index.js"></script>
    
</html>