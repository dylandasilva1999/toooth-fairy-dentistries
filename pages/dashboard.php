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
        <title>TFD | Dashboard</title>
        <link rel="icon" href="../assets/img//Logo.svg">
        
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
        <link rel="stylesheet" href="../assets/css/dashboard.css">
        <link rel="stylesheet" href="../assets/css/sidenav.css">
        
    </head>

    <body>
            <?php include "../include/sideNav.php" ?>

              <div class="container-fluid">
                <div class="row cards">
                    <div class="card">
                        <div class="card-body">
                            <div class="total-patients">
                                <div class="total-patients-icon"></div>
                                <div class="vertical-line"></div>
                                <?php getTotalPatients(); ?>
                                <o id="card-text">Total Patients</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="total-doctors">
                                <div class="total-doctors-icon"></div>
                                <div class="vertical-line"></div>
                                <?php getTotalDoctors(); ?>
                                <o id="card-text">Total Doctors</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="total-appointments">
                                <div class="total-appointments-icon"></div>
                                <div class="vertical-line"></div>
                                <?php getTotalBookings(); ?>
                                <o id="card-text">Appointments</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="total-rooms">
                                <div class="total-rooms-icon"></div>
                                <div class="vertical-line"></div>
                                <h3 id="total-rooms">6</h3>
                                <o id="card-text">Total Rooms</p>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row graphs">
                    <div class="card line-chart">
                        <div class="card-body">
                            <div id="line-chart"></div>
                        </div>
                    </div>
                    <div class="card male-female-card">
                        <div class="card-body">
                            <div class="male-female-patients" id="pie-chart"></div>
                        </div>
                    </div>
                    <div class="card employee-of-the-month-card">
                        <div class="card-body">
                            <div class="employee-of-the-month">
                                <h1 id="employee-of-the-month">Employee of the Month!</h1>
                                    <?php showEmployeeOfMonth(); ?>
                                <div class="illustration"></div>
                            </div>
                        </div>
                    </div>     
                </div>
                <div class="row">
                    <div class="card employees-card">
                        <div class="card-body">
                            <div class="employees">
                                <h1 id="employees">Employees</h1>
                            </div>
                            <ul>
                                <?php showAllEmployees(); ?>
                            </ul>
                        </div>
                    </div> 
                    <div class="card upcoming-appointments-card">
                        <div class="card-body">
                            <div class="employees">
                                <div class="tube">
                                    <h1 id="upcoming-text">Upcoming Appointments</h1>
                                </div>
                                <?php upcomingAppointments(); ?>
                            </div>
                        </div>
                    </div> 
                </div>
              </div>
              
            </div>
        </div>

    </body>
    
    <!-- Javascript -->
    <script src="../assets/js/dashboard.js"></script>
    
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

    <script>

        var options = {
        series: [{
        name: 'Patients',
        data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5]
        }],
        chart: {
            width: 880,
            height: 350,
            type: 'line',
        },
        stroke: {
            width: 7,
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: ['1/11/2000', '2/11/2000', '3/11/2000', '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000', '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000', '12/11/2000', '1/11/2001', '2/11/2001', '3/11/2001','4/11/2001' ,'5/11/2001' ,'6/11/2001'],
        },
        title: {
            text: 'Time Admitted',
            align: 'left',
            style: {
            fontSize: "22px",
            fontFamily: "proxima_novabold",
            color: '#666'
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                colorStops: [
                    {
                    offset: 0,
                    color: "#F15F24",
                    opacity: 1
                    },
                    {
                    offset: 100,
                    color: "#2a58ae",
                    opacity: 1
                    }
                ],
                shadeIntensity: 1,
                type: 'horizontal',
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100, 100, 100]
            },
        },
        markers: {
            size: 4,
            colors: ["#F15F24"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
            size: 7,
            }
        },
        yaxis: {
            min: 0,
            max: 40,
            title: {
            text: '',
            },
        },
        responsive: [{
          breakpoint: 2000,
          options: {
            chart: {
              width: 620,
              height: 300,
            },
            legend: {
              position: 'bottom'
            }
          },
          breakpoint: 1921,
          options: {
            chart: {
              width: 620,
              height: 300,
            },
            legend: {
              position: 'bottom'
            }
          },
          breakpoint: 416,
          options: {
            chart: {
              width: 275,
              height: 300,
            },
            legend: {
              position: 'bottom'
            }
          },
          breakpoint: 769,
          options: {
            chart: {
              width: 600,
              height: 300,
            },
            legend: {
              position: 'bottom'
            }
          }, 
        }]
        };

        var chart = new ApexCharts(document.querySelector("#line-chart"), options);
        chart.render();

        var options = {
          series: [44, 55],
          colors: ["#F15F24", "#2a58ae"],
          chart: {
          type: 'donut',
          height: 350,
          offsetY: 45,
        },
        labels: ['Male', 'Female'],
        dataLabels: {
          enabled: false
        },
        legend: {
              position: 'bottom',
              
        },
        title: {
            text: 'Patients by Gender',
            align: 'center',
            offsetY: -10,
            style: {
            fontSize: "22px",
            fontFamily: "proxima_novabold",
            color: '#666',
            }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 260
            },
            legend: {
              position: 'bottom'
            }
          },
        }]
        };

        var chart = new ApexCharts(document.querySelector("#pie-chart"), options);
        chart.render();

    </script>

</html>
