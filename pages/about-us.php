<?php require "../fragments/functions.php" ?>

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
        <title>TFD | About Us</title>
        <link rel="icon" href="../assets/img/Logo.svg">
        
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
        
        <!-- BOOTSTRAP AND PAPER KIT-->
        <link rel="stylesheet" href="../assets/css/paper-kit.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-calendar/0.2.5/css/calendar.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">   
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/about-us.css">
        
    </head>

    <body>

        <?php include "../include/sideNav.php" ?>
              
              <div class="container-fluid">
                <div class="row cards">
                    <h1 id="about-us-text">About Us</h1>
                </div>
                <div class="row one">
                    <div class="card intro">
                        <div class="card-body">
                            <div class="illustration"></div>
                            <div class="about-us-container">
                                <p id="about-us-text">
                                    The South African Dental Association (SADA) is the peak national body for the dental profession in South Africa made of over 80% of 
                                    active registered dentists, both in the public and private sectors in South Africa. It is a non-profit professional association with 
                                    voluntary membership organisation represented by a total of 11 branches, one in every province of the Republic of South Africa, with 
                                    Gauteng and Eastern Cape provinces having two branches each. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card emergency-numbers">
                        <div class="card-body">
                            <h2 id="emergency-numbers">Emergency Numbers</h2>
                            <div class="emergency-container">
                                <div class="police">
                                    <div class="police-icon"></div>
                                    <p id="police-number">10111</p>
                                </div>
                                <div class="fireman">
                                    <div class="fireman-icon"></div>
                                    <p id="fireman-number">10177</p>
                                </div>
                                <div class="ambulance">
                                    <div class="ambulance-icon"></div>
                                    <p id="ambulance-number">012 310 6300</p>
                                </div>
                                <div class="emergency-tip">
                                    <div class="tip-icon"></div>
                                    <p id="tip-text">
                                        Aside from emergency healthcare numbers specifically catering for the Covid-19 coronavirus, the government has 
                                        also set up several other hotlines dedicated to other issues that may arise
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card gallery">
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="../assets/img/artur-tumasjan-qLzWvcQq-V8-unsplash.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="../assets/img/ibrahim-boran-zsKFQs2kDpM-unsplash.jpg" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="../assets/img//jonathan-borba-v_2FRXEba94-unsplash.jpg" alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="card contact-info">
                        <div class="card-body">
                            <h2 id="contact-info">Contact Info</h2>
                            <div class="contact-info-container">
                                <img src="../assets/img/location.svg" class="location-icon"><h2 id="location">15 Elm Street</h2>
                                <img src="../assets/img/phone.svg" class="phone-icon"><h2 id="phone">012 234 3456</h2>
                                <img src="../assets/img/mail.svg" class="mail-icon"><h2 id="mail">tooothfairy@hotmail.com</h2>
                                <div class="contact-illustration"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card our-story">
                        <div class="card-body">
                            <h2 id="our-story">Our Story</h2>
                        </div>
                    </div>
                </div>
              </div>
            </div>   
        </div>

    </body>
    
    <!-- Javascript -->
    <script src="../assets/js/about-us.js"></script>
    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-calendar/0.2.5/js/calendar.min.js" crossorigin="anonymous"></script>

    <!-- Paper Kit 2.0 -->
    <script src="../assets/js/paper-kit.min.js" type="text/javascript"></script>

    <!-- Apex Charts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    

</html>
