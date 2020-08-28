<?php 

    //SHOW USER PROFILE IMAGE
    function showUserProfileImage(){
        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

        if($mysqli->connect_error){
            die("connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }

        if(isset($_SESSION['username'])){
            $profileName = $_SESSION['username'];
            $userProfileQuery = "SELECT user_profile_image FROM users WHERE username = '$profileName'";

            if($result = $mysqli->query($userProfileQuery)){
                while($row = $result->fetch_assoc()){
                    $profileImg = $row['user_profile_image'];

                    echo '<img src="../assets/img/'.$profileImg.'"alt="profile-img">';
                }
                $result->free();
            }

        }
    }
    //END OF SHOW USER PROFILE

    //SHOW USERNAME
    function showUsername(){
        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

        if($mysqli->connect_error){
            die("connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }

        if(isset($_SESSION['username'])){
            $profileName = $_SESSION['username'];
            $usernameQuery = "SELECT username FROM users WHERE username = '$profileName'";

            if($result = $mysqli->query($usernameQuery)){
                while($row = $result->fetch_assoc()){
                    $profileName = $row['username'];

                    echo '<p class="name" name="user_name">'.$profileName.'</p> ';
                }
                $result->free();
            }

        }
    }
    //END OF SHOW USERNAME

    //SHOW USERNAME
    function upcomingAppointments(){
        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

        if($mysqli->connect_error){
            die("connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }

        $upcomingAppQuery = "SELECT * FROM
        bookings, patients
        WHERE bookings.patient = patients.patient_fullname";    
            
            if($result = $mysqli->query($upcomingAppQuery)){
                while($row = $result->fetch_assoc()){
                    $patient = $row['patient'];
                    $patientProfile = $row['patient_profile_image'];
                    $timeSlot = $row['booking_time_slot'];
                    
                    echo '
                    <div class="patient">
                        <img src="../assets/img/'.$patientProfile.'">
                        <p id="patient-name">'.$patient.'</p>
                        <p id="appointment-time">'.$timeSlot.'</p>
                    </div>
                    ';
            }
            $result->free();   
        }
    }
    //END OF SHOW USERNAME

    //GET TOTAL PATIENTS
    function getTotalPatients(){
        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

        if($mysqli->connect_error){
            die("connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }

        $totalPatientsQuery = "SELECT * FROM patients";

        if($result = $mysqli->query($totalPatientsQuery)){
            $totalPatients = mysqli_num_rows($result); 

            echo '
                <h3 id="total-doctors">'.$totalPatients.'</h3>
            ';
        }
        $result->free();
    }
    //END OF TOTAL PATIENTS

    //GET TOTAL DOCTORS
    function getTotalDoctors(){
        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

        if($mysqli->connect_error){
            die("connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }

        $totalDoctorsQuery = "SELECT * FROM doctors";

        if($result = $mysqli->query($totalDoctorsQuery)){
            $totalDoctors = mysqli_num_rows($result); 

            echo '
                <h3 id="total-doctors">'.$totalDoctors.'</h3>
            ';
        }
        $result->free();
    }
    //END OF TOTAL DOCTORS

    //GET TOTAL BOOKINGS
    function getTotalBookings(){
        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

        if($mysqli->connect_error){
            die("connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }

        $totalBookingQuery = "SELECT * FROM bookings";

        if($result = $mysqli->query($totalBookingQuery)){
            $totalBookings = mysqli_num_rows($result); 

            echo '
                <h3 id="total-appointments">'.$totalBookings.'</h3>
            ';
        }    
        $result->free();
    }
    //END OF TOTAL BOOKINGS

    //GET MALE FEMALE
    function getMaleFemale($patTotal){
        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

        if($mysqli->connect_error){
            die("connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        } 

        $maleRatio = "SELECT * FROM patients WHERE patient_gender = 'Male'";
        $femaleRatio = "SELECT * FROM patients WHERE patient_gender = 'Female'";

        $totalPatientsQuery = "SELECT * FROM patients";

        if($result = $mysqli->query($maleRatio)){
            if($result = $mysqli->query($femaleRatio)){
                while($row = $result->fetch_assoc()){
                    $patientID = $row['id'];

                    //MALE CALCULATION
                    $patientMale = mysqli_num_rows($result);
                    $patientMalePerc = $patientMale/$totalPatients * 100;
                    
                    //FEMALE CALCULATION
                    $patientFemale = mysqli_num_rows($result);
                    $patientFemalePerc = $patientFemale/$totalPatients * 100; 

                    echo '

                    ';
                }
            }    
            $result->free();
        }
    }
    //END OF GET MALE FEMALE

    //SHOW EMPLOYEE OF MONTH
    function showEmployeeOfMonth(){
        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');
        
            if($mysqli->connect_error){
            die("Connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connec_error);
            }
            
            $userQuery = "SELECT * FROM users LIMIT 1";    
            
            if($result = $mysqli->query($userQuery)){
                while($row = $result->fetch_assoc()){
                    $username = $row['username'];
                    $userProfile = $row['user_profile_image'];
                    
                    echo '
                      <p id="employee">'.$username.'</p>
                      <div class="employee-img">
                        <img src="../assets/img/'.$userProfile.'">
                      </div>
                    ';
            }
            $result->free();   
        }
    }
    //END OF EMPLOYEE OF MONTH

    //SHOW ALL EMPLOYEES
    function showAllEmployees(){
        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');
        
            if($mysqli->connect_error){
            die("Connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connec_error);
            }
            
            $userQuery = "SELECT * FROM users";    
            
            if($result = $mysqli->query($userQuery)){
                while($row = $result->fetch_assoc()){
                    $username = $row['username'];
                    $userProfile = $row['user_profile_image'];
                    
                    echo '
                      <li><div class="employee-name-img">
                      <img src="../assets/img/'.$userProfile.'">
                      <p id="employee-name">'.$username.'</p>
                      </div></li>
                    ';
            }
            $result->free();   
        }
    }
    //END OF SHOW EMPLOYEES

    //SHOW DOCTORS
    function showDoctors(){

        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');
    
        if($mysqli->connect_error){
            die("connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }

        function filterTable($searchQuery){
            $connect =  mysqli_connect('localhost', 'root', '', 'toooth_fairy_dentistries_db');
            $filter_result = mysqli_query($connect, $searchQuery);
            return $filter_result;
        }

        if(isset($_POST['search'])){

            $valueToSearch = $_POST['search'];
            $searchQuery = "SELECT * FROM doctors WHERE CONCAT(doctor_full_name, doctor_address, doctor_specialisation) LIKE '%".$valueToSearch."%'";
            $search_result = filterTable($searchQuery);
    
            if($result = $mysqli->query($searchQuery)){
                while($row = $result->fetch_assoc()){

                    $doctorID = $row['doctor_id'];
                    $doctorFullName = $row['doctor_full_name'];
                    $doctorAddress = $row['doctor_address'];
                    $doctorSpecialisation = $row['doctor_specialisation'];
                    $docProfileImg = $row['doctor_profile_image'];
    
                    echo '
                    <div class="card">
                        <div class="card-body">
                            <div class="doctors-profile-img">
                                <img src="../assets/img/'.$docProfileImg.'">
                            </div>
                            <a href="../fragments/editDoctor.php?id='.$doctorID.'"><div class="edit-icon"></div></a>
                            <div class="remove-btn" data-toggle="modal" data-target="#exampleModal"></div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to remove?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="left-side">
                                                <a href="../fragments/removeDoctor.php?id='.$doctorID.'"><button type="button" class="btn btn-default btn-link">Remove</button></a>
                                            </div>
                                            <div class="right-side">
                                                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 id="doctor-name">'.$doctorFullName.'</h2>
                            <div class="specialisation-container">
                                <p id="doctor-specialisation">'.$doctorSpecialisation.'</p>
                            </div>
                            <p id="doctor-address">'.$doctorAddress.'</p>
                            <div id="appointments-btn">
                                    <button type="button" class="appointments" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Here will be a list of bookings!">Appointments</button>
                            </div>   
                        </div>
                    </div> <!--Card-->
                    ';
    
                }
            }
        }
    
        else {
    
            $doctorsQuery = "SELECT * FROM doctors";
        
            if($result = $mysqli->query($doctorsQuery)){
                while($row = $result->fetch_assoc()){
        
                    $doctorID = $row['doctor_id'];
                    $doctorFullName = $row['doctor_full_name'];
                    $doctorAddress = $row['doctor_address'];
                    $doctorSpecialisation = $row['doctor_specialisation'];
                    $docProfileImg = $row['doctor_profile_image'];
        
                    echo '
                    <div class="card">
                        <div class="card-body">
                            <div class="doctors-profile-img">
                                <img src="../assets/img/'.$docProfileImg.'">
                            </div>
                            <a href="../fragments/editDoctor.php?id='.$doctorID.'"><div class="edit-icon"></div></a>
                            <div class="remove-btn" data-toggle="modal" data-target="#exampleModal"></div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to remove?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="left-side">
                                                <a href="../fragments/removeDoctor.php?id='.$doctorID.'"><button type="button" class="btn btn-default btn-link">Remove</button></a>
                                            </div>
                                            <div class="right-side">
                                                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 id="doctor-name">'.$doctorFullName.'</h2>
                            <div class="specialisation-container">
                                <p id="doctor-specialisation">'.$doctorSpecialisation.'</p>
                            </div>
                            <p id="doctor-address">'.$doctorAddress.'</p>
                            <div id="appointments-btn">
                                    <button type="button" class="appointments" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Here will be a list of bookings!">Appointments</button>
                            </div>   
                            </div>
                    </div> <!--Card-->
                    ';
                }
                $result->free();
            }
        }
    }
    //END OF SHOW DOCTORS

    //SHOW PATIENTS
    function showPatients(){

        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');
    
        if($mysqli->connect_error){
            die("connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }

        function filterTable($searchQuery){
            $connect =  mysqli_connect('localhost', 'root', '', 'toooth_fairy_dentistries_db');
            $filter_result = mysqli_query($connect, $searchQuery);
            return $filter_result;
        }

        if(isset($_POST['search'])){

            $valueToSearch = $_POST['search'];
            $searchQuery = "SELECT * FROM patients WHERE CONCAT(patient_fullname, patient_address, patient_medical_aid_number) LIKE '%".$valueToSearch."%'";
            $search_result = filterTable($searchQuery);
    
            if($result = $mysqli->query($searchQuery)){
                while($row = $result->fetch_assoc()){

                    $patientID = $row['patient_id'];
                    $patientFullName = $row['patient_fullname'];
                    $patientAddress = $row['patient_address'];
                    $patientMedNum = $row['patient_medical_aid_number'];
                    $patProfileImg = $row['patient_profile_image'];
    
                    echo '
                    <div class="card">
                        <div class="card-body">
                            <div class="patient-profile-img">
                                <img src="../assets/img/'.$patProfileImg.'">
                            </div>
                            <a href="../fragments/editPatient.php?id='.$patientID.'"><div class="edit-icon"></div></a>
                            <div class="remove-btn"></div>
                            <div class="remove-btn" data-toggle="modal" data-target="#exampleModal"></div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to remove?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="left-side">
                                                <a href="../fragments/removePatient.php?id='.$patientID.'"><button type="button" class="btn btn-default btn-link">Remove</button></a>
                                            </div>
                                            <div class="right-side">
                                                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 id="patient-name">'.$patientFullName.'</h2>
                            <p id="patient-address">'.$patientAddress.'</p>
                            <p id="patient-medical-aid">Patient Medical Aid Number:</p>
                            <div class="medical-aid-container">
                                <p id="patient-medical-aid-number">'.$patientMedNum.'</p>
                            </div>
                            <button type="button" class="appointments" data-container="body" data-toggle="popover" data-placement="bottom" 
                            data-content="Here will be a list of bookings!">
                                Appointments
                            </button>
                        </div>
                    </div>
                    ';
    
                }
            }
        }

        else {
    
        $patientsQuery = "SELECT * FROM patients";
    
        if($result = $mysqli->query($patientsQuery)){
            while($row = $result->fetch_assoc()){
    
                $patientID = $row['patient_id'];
                $patientFullName = $row['patient_fullname'];
                $patientAddress = $row['patient_address'];
                $patientMedNum = $row['patient_medical_aid_number'];
                $patProfileImg = $row['patient_profile_image'];
    
                echo '
                <div class="card">
                        <div class="card-body">
                            <div class="patient-profile-img">
                                <img src="../assets/img/'.$patProfileImg.'">
                            </div>
                            <a href="../fragments/editPatient.php?id='.$patientID.'"><div class="edit-icon"></div></a>
                            <div class="remove-btn"></div>
                            <div class="remove-btn" data-toggle="modal" data-target="#exampleModal"></div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to remove?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="left-side">
                                                <a href="../fragments/removePatient.php?id='.$patientID.'"><button type="button" class="btn btn-default btn-link">Remove</button></a>
                                            </div>
                                            <div class="right-side">
                                                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 id="patient-name">'.$patientFullName.'</h2>
                            <p id="patient-address">'.$patientAddress.'</p>
                            <p id="patient-medical-aid">Patient Medical Aid Number:</p>
                            <div class="medical-aid-container">
                                <p id="patient-medical-aid-number">'.$patientMedNum.'</p>
                            </div>
                            <button type="button" class="appointments" data-container="body" data-toggle="popover" data-placement="bottom" 
                            data-content="Here will be a list of bookings!">
                                Appointments
                            </button>
                        </div>
                </div>
                ';
            }
            $result->free();
            }
        }
    }
    //END OF SHOW PATIENTS

    //PATIENT OPTIONS
    function showUser(){

        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');
        
        if($mysqli->connect_error){
            die("Connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }
    
        $sql = "SELECT * FROM users";
    
        if($result = $mysqli->query($sql)){
            while($row = $result->fetch_assoc()){
                $userID = $row['user_id'];
                $username = $row['username'];
                $userGender = $row['user_gender'];
                $userEmail = $row['user_email'];
                $userProfileImg = $row['user_profile_image'];
    
                echo '
                
                <div class="card">
                        <div class="card-body">
                            <div class="user-profile-img">
                                <img src="../assets/img/'.$userProfileImg.'">
                            </div>
                            <a href="../fragments/editUser.php?id='.$userID.'"><div class="edit-icon"></div></a>
                            <h2 id="user-username">'.$username.'</h2>
                            <p id="user-email">'.$userEmail.'</p>
                            <p id="user-gender">'.$userGender.'</p>
                        </div>
                    </div>
                </div>
                
                ';
            }
        }
        $result->free();
        //return $produceLibrary;
    
    }
    //END OF PATIENT OPTIONS

    //PATIENT OPTIONS
    function patientOptions(){

        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');
        
        if($mysqli->connect_error){
            die("Connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }
    
        $sql = "SELECT * FROM patients";
    
        if($result = $mysqli->query($sql)){
            while($row = $result->fetch_assoc()){
                $patientFullName = $row["patient_fullname"];
    
                echo '
                
                <option>'.$patientFullName.'</option>
                
                ';
            }
        }
        $result->free();
        //return $produceLibrary;
    
    }
    //END OF PATIENT OPTIONS

    //ASSIGN DOCTOR
    function assignDoctor(){

        $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');
        
        if($mysqli->connect_error){
            die("Connection Error: " . $mysqli->connect_errno . ':' . $mysqli->connect_error);
        }
    
        $sql = "SELECT * FROM doctors";
    
        if($result = $mysqli->query($sql)){
            while($row = $result->fetch_assoc()){
                $doctorFullName = $row["doctor_full_name"];
    
                echo '<option>'.$doctorFullName.'</option>';
    
            }
        }
        $result->free();
        //return $produceLibrary;
    
    }
    //END OF ASSIGN DOCTOR
?>