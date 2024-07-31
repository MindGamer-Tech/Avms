<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['avmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$cvmsaid=$_SESSION['cvmsaid'];
$Visitorphoto=$_FILES['Visitorphoto']['name'];
$catname=$_POST['category'];
$visname=$_POST['visname'];
$mobnumber=$_POST['mobilenumber'];
$add=$_POST['address'];
$ApartmentName1=$_POST['ApartmentName1'];
$Flat1=$_POST['Flat1'];
$ApartmentName2=$_POST['ApartmentName2'];
$Flat2=$_POST['Flat2'];
$pdescription=$_POST['passdescription'];
$fdate=$_POST['inputdate'];
$tdate=$_POST['todate'];


$pno=mt_rand(10000000,99999999);
 $query=mysqli_query($con,"insert into tblvisitorpass(Visitorphoto,passnumber,categoryName,VisitorName,MobileNumber,Address,ApartmentName1,Flat1,ApartmentName2,Flat2,passDetails,fromDate,toDate) value('$Visitorphoto','$pno','$catname','$visname','$mobnumber','$add','$ApartmentName1','$Flat1','$ApartmentName2','$Flat2','$pdescription','$fdate','$tdate')");
 $query1=mysqli_query($con,"insert into tblattendance(VisitorName) value('$visname')");

if ($query) {
 echo "<script>alert('Pass Created successfully');</script>"; 
 echo "<script>window.location.href = 'create-pass.php'</script>";
 move_uploaded_file($_FILES["Visitorphoto"]["tmp_name"],"upload/".$_FILES["Visitorphoto"]["name"]);
  }
  else
    {
 echo "<script>alert('Something Went wrong. Please Try agaian');</script>"; 
 echo "<script>window.location.href = 'visitors-form.php'</script>";    
 
    }

  
}  
   
}


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
    <title>AVSM | Pass</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
   
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Create</strong> New Pass
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                            <div class="row form-group">

          <div class="col col-md-2">
                                                    <label for="text-input" class=" form-control-label">Catagory</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                        <select name="category" class="form-control" required>
                            <option value="">select</option>
<?php
$ret=mysqli_query($con,"select * from tblcategory order by categoryName");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<option value="<?php  echo $row['categoryName'];?>"><?php  echo $row['categoryName'];?></option>
<?php } ?>
</select>
</div>

<div class="col col-md-2">
<label for="text-input" class=" form-control-label">Visitor Name</label>
</div>
<div class="col-12 col-md-4">
  <input type="text" id="visname" name="visname" placeholder="Visitor Name" class="form-control" required="true">
</div>
</div>
                                            
                                        <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label for="password-input" class=" form-control-label">Phone Number</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" class="form-control" maxlength="10" required="true">
                                                    
                                                </div>
                                          
                                                <div class="col col-md-2">
                                                    <label for="textarea-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <textarea name="address" id="address" rows="3" placeholder="Enter Visitor Address..." class="form-control" required="true"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label for="password-input" class=" form-control-label">Apartment Name1</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <select name="ApartmentName1" id="ApartmentName1"  placeholder="Apartment Name" class="form-control" required="true">
                                                        <option value="">--Choose Apartment--</option>
                                                        <option value="Vasant phase1">Vasant phase1</option>
                                                        <option value="Vasant phase2">Vasant phase2</option>
                                                        <option value="Vasant phase3">Vasant phase3</option>
</select>
                                                    
                                                </div>
                                                <div class="col col-md-2">
                                                    <label for="password-input" class=" form-control-label">Flat No</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="number" id="Flat1" name="Flat1" placeholder="flat" class="form-control" required="true">
                                                    
                                                </div>  
                                            </div>
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label for="password-input" class=" form-control-label">Apartment Name2</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <select name="ApartmentName2" id="ApartmentName2"  placeholder="Apartment Name" class="form-control"    >
                                                        <option value="">--Choose Apartment--</option>
                                                        <option value="Vasant phase1">Vasant phase1</option>
                                                        <option value="Vasant phase2">Vasant phase2</option>
                                                        <option value="Vasant phase3">Vasant phase3</option>
</select>
                                                    
                                                </div>
                                                <div class="col col-md-2">
                                                    <label for="password-input" class=" form-control-label">Flat No</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="number" id="Flat2" name="Flat2" placeholder="flat" class="form-control">
                                                    
                                                </div>  
                                            </div>

   <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label for="password-input" class=" form-control-label">From Date</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                   <input type="date" id="inputdate" name="inputdate" class="form-control">
                                                    
                                                </div>
                                                <div class="col col-md-2">
                                                    <label for="password-input" class=" form-control-label">To Date</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                        <input type="date" id="todate" name="todate" class="form-control">
                                                    
                                                </div>
                                            </div>


                                            
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label for="password-input" class=" form-control-label">Pass Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="text" id="passdescription" name="passdescription" placeholder="Pass Description" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label for="password-input" class=" form-control-label">Photo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="file" id="Visitorphoto" name="Visitorphoto" placeholder="Visitorphoto" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
                                            
                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Create
                                        </button></p>
                                        
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                       
                        </div>
                        
                    </div>
               
 
<?php include_once('includes/footer.php');?>
   </div> </div>
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
<script type="text/javascript">
$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#inputdate').attr('min', maxDate);
});


$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#todate').attr('min', maxDate);
});
</script
    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php   ?>