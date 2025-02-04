<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['avmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>AVMS Visitors</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
      <?php include_once('includes/sidebar.php');?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
      
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header.php');?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                       <h3 align="center">Vasant Phase1</h3>
                                       <br>
                                    <hr />
                                    <table class="table table-borderless table-striped table-earning">
                                         <thead>
            <style>
                th{
                    text-align: center;
                }
                
                td{
                    text-align: center;
                    }
            </style>
                <tr>
                
                  <th>Floor</th>
            
                  <th>Resident Name</th>
                  <th>Flat No</th>
                  <th>Mobile Number</th>
                </tr>
        
            
                <tr>
                  <td >1st Floor</td>
                  <td >Bharat Pawar</td>
                  <td>101</td>
                  <td>2456784356</td>
                </tr>

                <tr>
                  <td></td>
                  <td >Sumesh Jadhav</td>
                  <td>102</td>
                  <td>6556782931</td>
                </tr>
                <tr><th>
                <th><th><th>
                </tr>
                <tr>
                  <td >2nd Floor</td>
                  <td >Omkar Pawar</td>
                  <td>201</td>
                  <td>2556784352</td>
                </tr>

                <tr>
                  <td></td>
                  <td >Umesh Iyar</td>
                  <td>202</td>
                  <td>6856782332</td>
                </tr>

                <tr><th>
                <th><th><th>
                </tr>
                <tr>
                  <td >3rd Floor</td>
                  <td >Dev Sangle</td>
                  <td>301</td>
                  <td>9367843522</td>
                </tr>

                <tr>
                  <td></td>
                  <td>Pratik Jadhav</td>
                  <td>302</td>
                  <td>9756782332</td>
                </tr>

                <tr><th>
                <th><th><th>
                </tr>
                <tr>
                  <td >4th Floor</td>
                  <td >Rakesh Mahatre</td>
                  <td>401</td>
                  <td>9056784352</td>
                </tr>

                <tr>
                  <td></td>
                  <td >Billal Patel</td>
                  <td>402</td>
                  <td>9856782788</td>
                </tr>

                                    </table>
                                </div>
                            </div>
                          
                        </div>
                        
                        
          
<?php include_once('includes/footer.php');?>
          </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<?php }  ?>
