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
        <title>TFD | Patients</title>
        <link rel="icon" href="../assets/img/Logo.svg">
        
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
        
        <!-- BOOTSTRAP AND PAPER KIT-->
        <link rel="stylesheet" href="../assets/css/paper-kit.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">   
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/patients.css">
        
    </head>

    <body>

        <?php include "../include/sideNav.php" ?>
              
              <div class="container-fluid">
                <div class="row cards">
                    <h1 id="patients-text">Patients</h1>
                    <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg">add new patient</button>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="form-container sign-up-container">
                                    <form enctype="multipart/form-data" method="post" action="../fragments/addPatient.php" class="input-sign-up-form">
                                        <h1 id="add-text">Add New Patient</h1>
                                        <div class="patient-illustration"></div>
                                        <input type="text" name="pat-fullname" placeholder="Full Name" required/>
                                        <input type="text" name="pat-address" placeholder="Address" required/>
                                        <input type="text" name="pat-medical-aid-number" placeholder="Medical Aid Number" required/>
                                        <input type="text" name="pat-mobile-number" placeholder="Mobile Number" required/>
                                        <input type="email" name="pat-email" placeholder="Email" required/>     
                                        <select name="pat-gender" id="pat-gender" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <input type="file" name="pat-profile" class="upload-profile">
                                        <button class="add-patient-btn">Add Patient</button>
                                    </form>
                                </div> <!--Add Patient Container-->
                            </div>
                        </div>
                    </div>
                    <div class="search-container">
                        <form action="../fragments/searchPatient.php" method="GET">
                          <input type="text" placeholder="Search Patients" name="search" class="search-bar">
                          <button type="submit" class="search"><img src="../assets/img/search.svg" class="search-icon"></button>
                        </form>
                    </div>
                </div>
                <div class="row doctors">
                    <?php showPatients(); ?>
                </div>
            </div>   
        </div>

    </body>
    
    <!-- Javascript -->
    <script src="../assets/js/patients.js"></script>
    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <!-- Paper Kit 2.0 -->
    <script src="../assets/js/paper-kit.min.js" type="text/javascript"></script>

    <!-- Apex Charts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</html>
