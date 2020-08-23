<!DOCTYPE html>
<html>

    <head>
        
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name="description" content="This is an administration portal for a receptionist at a dentistry company called Toooth Fairy Dentistries">
        <meta name="keywords" content="Dentistries, Tooth Fairy, Teeth, Shiny, White">
        <meta name="author" content="Dylan da Silva">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
        
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

        <div class="wrapper">
            <div class="sidebar">
              <div class="bg-shadow"></div>
                <div class="sidebar-inner">
                   <div class="close">
                  <i class="fas fa-times"></i>
                </div>
                <div class="profile-info">
                    <div class="logo-text">
                        <p class="logo-name">Toooth Fairy <br>Dentistries</p> 
                    </div>
                    <div class="divider"></div>
                    <div class="profile-img">
                      <img src="../assets/img/joe-gardner-2.jpg" alt="profile-img">
                    </div>
                    <div class="profile-data">
                        <p class="name">Joe Gardner</p>  
                        <p class="role">Receptionist</p>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li><a href="./dashboard.html" >
                        <i class="fas fa-cube"></i>
                        Dashboard
                        </a></li>  
                    <li><a href="./doctors.html">
                        <i class="fas fa-user-md"></i>
                        Doctors
                        </a></li>  
                    <li><a href="#">
                        <i class="fas fa-users"></i>
                        Patients
                        </a></li>  
                    <li><a href="#">
                       <i class="fas fa-calendar"></i>
                        Bookings
                        </a></li>  
                    <li><a href="#" class="active">
                        <i class="fas fa-question-circle"></i>
                        About Us
                        </a></li>
                    <li><a href="#">
                        <i class="fas fa-user"></i>
                        Profile
                        </a></li>       
                </ul>
                <div id="log-out-btn">
                    <button type="button" class="log-out" data-toggle="modal" data-target="#loginModal">
                        Log Out
                    </button>
                </div>
                
                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-register">
                        <div class="modal-content">
                            <div class="modal-header no-border-header text-center">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <h6 class="text-muted">Are you sure you want to log out?</h6>
                            </div>
                            <div class="modal-body">
                                <button class="yes-btn">Yes</button>
                                <button class="no-btn" data-dismiss="modal">No</button>
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
