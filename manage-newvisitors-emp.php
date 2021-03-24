<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cvmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>RVMS Visitors</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
      <?php include_once('includes/sidebar_emp.php');?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
      
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header-emp.php');?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
             <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">

                                    <table class="table table-borderless table-striped table-earning">
                                      <center><p>Visitor(s) who have Entered Resident in 2 Days time</p></center> 
                                         <thead>
                                        <tr>
                                            <tr>
                  <th>NO.</th>
            
                  <th>Full Name</th>
              
              <th>Student Number</th>
              <th>Block</th>
              <th>Room</th>
              <th>Visited</th>
              <th>Resident</th>
               <th>Time In</th>
              <th>Time Out</th>
                   <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>
                                       <?php
$ret=mysqli_query($con,"select * from tblvisitor where date(EnterDate)>=(DATE(NOW()) - INTERVAL 2 DAY);");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr >
                  <td> <a href="#"><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['FullName'];?></td>
                  <td><a href="Student-detail-emp.php?editid=<?php echo $row['Student_num'];?>"><?php  echo $row['Student_num'];?></td>
                  <td><?php  echo $row['Block'];?></td>
                  <td><?php  echo $row['Room'];?></td>
                  <td><?php  echo $row['WhomtoMeet'];?></td>
                  <td><?php  echo $row['Res'];?></td>
                  <td><?php  echo $row['EnterDate'];?></td>
                  <td><?php  echo $row['outtime'];?></td>
                  <td>
                    <a href="?editid=<?php echo $row['ID'];?>" title="View Full Details" title="View Full Details">
                     

                        <button type="submit" name="submit" class="btn btn-primary btn-sm" >Sign Out</button>
<?php

$eid=$_GET['editid'];

 
$remark="Out";
 $query=mysqli_query($con,"update tblvisitor set remark='$remark' where  ID='$eid'");


  if ($query) {
    $msg="Visitors Remark has been Updated.";




  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }



 ?>


                  
                    </a>
                  </td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
                                    </table>
                                </div>
                            </div>
                          
                        </div>

                      <center><a href="generate-pdf.php"><button>Generate PDF 📁</button></a></center>
                        
                        
          
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
