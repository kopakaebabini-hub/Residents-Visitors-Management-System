<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cvmsaid']==0))
 {
  header('location:logout.php');
} else
{
    if(isset($_POST['submit']))
{

$eid=$_GET['editid'];
 


    if ($query) {
    $msg="Visitors Remark has been Updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title Page-->
    <title>RVSM Visitor Info</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link rel="icon" href="image/icon/yin.jpg" type="image/icon type">
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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Student</strong>  Details
                                    </div>
                                    <div class="card-body card-block">
                                        
                                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"SELECT * FROM `tblstudent` WHERE Student_num='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) 
{

 ?><table border="1" class="table table-bordered mg-b-0">
                                            <tr>
    <th>Full Name</th>
    <td><?php  echo $row['std_fullname'];?></td>
  </tr>
   <tr>
    <th>Student Number</th>
    <td><?php  echo $row['Student_num'];?></td>
  </tr>

  <tr>
    <th>Surname</th>
    <td><?php  echo $row['std_surname'];?></td>
  </tr>
  <tr>
    <th>Date Of Birth</th>
    <td><?php  echo $row['std_DOB'];?></td>
  </tr>
  <tr>
    <th>Phone Number</th>
    <td><?php  echo $row['std_pnumber'];?></td>
  </tr>
  <tr>
    <th>Email</th>
    <td><?php  echo $row['std_email'];?></td>
  </tr>
  <tr>
    <th>Address</th>
    <td><?php  echo $row['std_addr'];?></td>

  </tr>
    <tr>
    <th>Image</th>
    <td><img src="images/icon/avatar-01.jpg" alt=""  height="150" width="150" /></td>
 


  </tr>



    




                       
                                    </div>
                                   
                                </div>
                       
                        </div>
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
<!-- end document-->
<?php }  ?>
<?php }  ?>