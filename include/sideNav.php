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
                        <?php showUserProfileImage(); ?>
                    </div>
                    <div class="profile-data">
                        <?php showUsername(); ?>
                        <p class="role">Receptionist</p>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <a href="../pages/dashboard.php" class="active"><li>
                        <i class="fas fa-cube"></i>
                        Dashboard
                        </li></a>  
                    <a href="../pages/doctors.php"><li>
                        <i class="fas fa-user-md"></i>
                        Doctors
                        </li></a>  
                    <a href="../pages/patients.php"><li>
                        <i class="fas fa-users"></i>
                        Patients
                        </li></a>  
                    <a href="../pages/calendar.php"><li>
                       <i class="fas fa-calendar"></i>
                       Bookings
                        </li></a>  
                    <a href="../pages/about-us.php"><li>
                        <i class="fas fa-question-circle"></i>
                        About Us
                        </li></a>
                    <a href="../pages/profile.php"><li>
                        <i class="fas fa-user"></i>
                        Profile
                        </li></a>       
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
                                <?php include '../fragments/loginSuccess.php';
                                    echo '
                                    <button class="yes-btn">Yes</button>
                                    <button class="no-btn" data-dismiss="modal">No</button>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="main-container">
              <div class="top-navbar">
                  <div class="hamburger">
                      <div class="hamburger-inner">
                          <i class="fas fa-bars"></i>  
                      </div>  
                  </div>
                 <ul class="right-bar">
                    
                 </ul>
              </div>