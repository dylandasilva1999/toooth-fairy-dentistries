<?php 

    $mysqli = new mysqli('localhost', 'root', '', 'toooth_fairy_dentistries_db');

    if($mysqli->connect_error){
        die("Connection Error " . $mysqli->connect_errno . ":" . $mysqli->connect_error);
    }

    if(isset($_POST['search'])){

        $valueToSearch = $_POST['search'];
        $searchQuery = "SELECT * FROM bookings, patients, doctors WHERE bookings.patient = patients.patient_fullname AND bookings.doctor = doctors.doctor_full_name AND 
        CONCAT(patient_fullname, doctor_full_name, patient_medical_aid_number, booking_room) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($searchQuery);

        if($result = $mysqli->query($searchQuery)){
            while($row = $result->fetch_assoc()){
                $bookingID = $row['booking_id'];
                $bookingRoom = $row['booking_room'];
                $bookingTimeSlot = $row['booking_time_slot'];
                $patient = $row['patient'];
                $patientAddress = $row['patient_address'];
                $patientProfileImg = $row['patient_profile_image'];
                $patientMedNum = $row['patient_medical_aid_number'];
                $doctor = $row['doctor'];
                $doctorSpec = $row['doctor_specialisation'];

                echo '
                    <div class="card">
                        <div class="card-body">
                            <p id="patient-num">'.$bookingID.'</p>
                            <div class="patient-profile-img">
                                <img src="../assets/img/'.$patientProfileImg .'">
                            </div>
                            <div class="divider"></div>
                            <div class="patient-info">
                                <div class="patient">
                                    <p id="patient-name">'.$patient.'</p>
                                    <p id="patient-address">'.$patientAddress.'</p>
                                </div>
                                <div class="doctor-info">
                                    <p id="doctor-name">'.$doctor.'</p>
                                    <p id="doctor-specialisation">'.$doctorSpec.'</p>
                                </div>
                                <div class="patient-medical-aid-num">
                                    <p id="patient-medical-aid-number">'.$patientMedNum.'</p>
                                 </div>
                                <div class="patient-appointment">
                                    <p id="patient-appointment">'.$bookingTimeSlot .'</p>
                                </div>
                                <div class="room-number">
                                    <p id="appointment-room-number">'.$bookingRoom.'</p>
                                </div>
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
                                                    <a href="../fragments/removeBooking.php?id='.$bookingID.'"><button type="button" class="btn btn-default btn-link">Remove</button></a>
                                                </div>
                                                <div class="right-side">
                                                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';

            }
        }

    }

    else {
    
        $sql = "SELECT * FROM 
                bookings, patients, doctors
                WHERE bookings.patient = patients.patient_fullname AND bookings.doctor = doctors.doctor_full_name";

        if($result = $mysqli->query($sql)){
            while($row = $result->fetch_assoc()){
                $bookingID = $row['booking_id'];
                $bookingRoom = $row['booking_room'];
                $bookingTimeSlot = $row['booking_time_slot'];
                $patient = $row['patient'];
                $patientAddress = $row['patient_address'];
                $patientProfileImg = $row['patient_profile_image'];
                $patientMedNum = $row['patient_medical_aid_number'];
                $doctor = $row['doctor'];
                $doctorSpec = $row['doctor_specialisation'];

                echo '
                    <div class="card">
                        <div class="card-body">
                            <p id="patient-num">'.$bookingID.'</p>
                            <div class="patient-profile-img">
                                <img src="../assets/img/'.$patientProfileImg .'">
                            </div>
                            <div class="divider"></div>
                            <div class="patient-info">
                                <div class="patient">
                                    <p id="patient-name">'.$patient.'</p>
                                    <p id="patient-address">'.$patientAddress.'</p>
                                </div>
                                <div class="doctor-info">
                                    <p id="doctor-name">'.$doctor.'</p>
                                    <p id="doctor-specialisation">'.$doctorSpec.'</p>
                                </div>
                                <div class="patient-medical-aid-num">
                                    <p id="patient-medical-aid-number">'.$patientMedNum.'</p>
                                 </div>
                                <div class="patient-appointment">
                                    <p id="patient-appointment">'.$bookingTimeSlot .'</p>
                                </div>
                                <div class="room-number">
                                    <p id="appointment-room-number">'.$bookingRoom.'</p>
                                </div>
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
                                                    <a href="../fragments/removeBooking.php?id='.$bookingID.'"><button type="button" class="btn btn-default btn-link">Remove</button></a>
                                                </div>
                                                <div class="right-side">
                                                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';

            }
        }

    }

    function filterTable($searchQuery){
        $connect =  mysqli_connect('localhost', 'root', '', 'toooth_fairy_dentistries_db');
        $filter_result = mysqli_query($connect, $searchQuery);
        return $filter_result;
     }

?>