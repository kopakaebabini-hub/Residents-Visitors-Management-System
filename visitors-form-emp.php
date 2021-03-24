<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cvmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$cvmsaid=$_SESSION['cvmsaid'];
 $fullname=$_POST['fullname'];

$stu_num=$_POST['student_number'];
$Block=$_POST['block'];
$Room=$_POST['room'];
$whomtomeet=$_POST['whomtomeet'];
$resi=$_POST['resid'];

 $query=mysqli_query($con,"insert into tblvisitor(FullName,Student_num,Block,Room,WhomtoMeet,Res) value('$fullname','$stu_num','$Block','$Room','$whomtomeet','$resi')");

    if ($query) 
    {

?>

    <script>alert('Visitor Data captured')
    window.location = "/rvms/dashboardemp.php";
     </script>
    


<?php
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
    <title>RVSM Visitors Forms</title>
<link rel="icon" href="image/icon/yin.jpg" type="image/icon type">
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
        <?php include_once('includes/sidebar_emp.php');?>
   
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header-emp.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add</strong> New Visitors
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Full Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="fullname" name="fullname" placeholder="Full Name" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Student Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input id="student_number" name="student_number" placeholder="29195780" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Block</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="block" name="block" placeholder="08" class="form-control" maxlength="10" required="">
                                                    
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Room</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="room" name="room" placeholder="05" class="form-control" maxlength="10" required="">
                                                    
                                                </div>
                                            </div>
                                          
                                            
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Whom to Meet</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="whomtomeet" name="whomtomeet" placeholder="Whom to Meet" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            
                                        

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Visited Resident</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                            <select name="resid" class="form-control" id="resid">
                                      <option value="pick" placeholder="Lost city Block 1 Room 5"></option>
                                      <?php
                                      $sql = mysqli_query($con, "SELECT Res_name From residents");
                                      $row = mysqli_num_rows($sql);
                                      while ($row = mysqli_fetch_array($sql)){
                                      echo "<option value='". $row['Res_name'] ."'>" .$row['Res_name'] ."</option>" ;
                                                                             }
                                       ?>
                            </select>
                                                </div>
                                            </div>
                                            
                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Submit
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

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php }  ?>