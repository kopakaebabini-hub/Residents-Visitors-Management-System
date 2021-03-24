<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['cvmsaid']==0))
 {
  header('location:logout.php');
  } else{ ?>
<!DOCTYPE html>
<html lang="en">

<head >
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>Dashboard</title>
  <link rel="icon" href="image/icon/yin.jpg" type="image/icon type">
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
        <!-- MENU SIDEBAR-->
 <?php
         // $user=$_POST['Usertype'];


      include_once('includes/sidebar.php');

  
 ?>
 



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
 <?php
//Number of Employees
 $query=mysqli_query($con,"SELECT ID FROM `tbladmin` WHERE Usertype='employee' ");
$count_today_visitors=mysqli_num_rows($query);
 ?>                       


                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text" >
                                                
                                                
                                                    <h2><?php echo $count_today_visitors;?></h2>
                                                    <a href="list-employees.php"> <span>No. OF Employees</span></a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                          
                                        </form>

                                
                                </div>
                            </div>

                           

 <?php
//Number of residents
 $query1=mysqli_query($con,"select ID from residents");
$count_yesterday_visitors=mysqli_num_rows($query1);
 ?>                       


                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                     <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2 ><?php echo $count_yesterday_visitors?></h2>
                                                 <a href="manage-residents.php"> <span>No. OF Residents</span></a>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>





    <?php


//Number of Students who Entertred Today
$queryinstudents=mysqli_query($con,"SELECT * FROM `tblvisitor` WHERE `outtime` IS NULL ");
$outtoday=mysqli_num_rows($queryinstudents);
 ?>                       


                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                     <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $outtoday?></h2>
                                                <a href="Inside-students.php"> <span>No. Of Students In</span> 
                                                <?php echo $_SESSION['Email']; ?> </a>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>



    <?php


//Today's  Visitors
 $query3=mysqli_query($con,"select ID from tblvisitor where date(EnterDate)=CURDATE();");
$count_total_visitors=mysqli_num_rows($query3);
 ?>


                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                            <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text" >
                                               <h2><?php echo $count_total_visitors?></h2>
                                                <a href="manage-Residents.php"> <span>Today's Visitors</span> 
                                               </a>
                                                    
                                               </span>
                                            </div>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>


 <!-- Pie Charts-->                     


                            <div class="col-sm-6 col-lg-3" style="width: 550px; height: 450px;" >
                                <div class="overview-item overview-item--c4"  style="width: 550px; height: 370px;" >
                                    <div class="text" >
                                             <center><span>Today's  Visitors per Resident</span></center>   
  
                                  <div id="piechart" style="width: 550px; height: 370px;" ></div>

 <a href="generate-pdf-2days.php" style="float: right;"><button> Generate 2 days Visitor PDF List 📁</button></a> 
                                 </div>

       
                             </div>
                        
                    
  
    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
 
 <?php
//Number of Visitors per resident
 //Lost City (Boys)
$res1=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Lost City (Males)' AND date(EnterDate)=CURDATE()");
$lostcityboys=mysqli_num_rows($res1);
//Lost City (Girls)
$res2=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Lost City (Females)' AND date(EnterDate)=CURDATE()");
$lostcitygirls=mysqli_num_rows($res2);
//Mbada
$res3=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Mbada' AND date(EnterDate)=CURDATE()");
$mbada=mysqli_num_rows($res3);
//Kgosi Dick Montshioa
$res4=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Kgosi Dick Montshioa' AND date(EnterDate)=CURDATE()");
$kgosidick=mysqli_num_rows($res4);
//Hopeville
$res5=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Hopeville' AND date(EnterDate)=CURDATE()");
$hope=mysqli_num_rows($res5);
//Khayelitsha
$res6=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Khayelitsha' AND date(EnterDate)=CURDATE()");
$khaya=mysqli_num_rows($res6);
//Dr James Moroka
$res7=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Dr James Moroka' AND date(EnterDate)=CURDATE()");
$james=mysqli_num_rows($res7);
//Sol Plaatje
$res8=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Sol Plaatje' AND date(EnterDate)=CURDATE()");
$sol=mysqli_num_rows($res8);
//Sedibeng
$res9=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Sedibeng' AND date(EnterDate)=CURDATE()");
$sed=mysqli_num_rows($res9);
//Ngaka Modiri Molema
$res10=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Ngaka Modiri Molema' AND date(EnterDate)=CURDATE()");
$ngaka=mysqli_num_rows($res10);
//Dr Nelson Mandela
$res11=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Dr Nelson Mandela' AND date(EnterDate)=CURDATE()");
$nelson=mysqli_num_rows($res11);
//Biko House
$res12=mysqli_query($con,"SELECT ID FROM tblvisitor WHERE Res='Biko House' AND date(EnterDate)=CURDATE()");
$biko=mysqli_num_rows($res12);


 ?>

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Lost City (Females)', <?php echo $lostcitygirls?>],
          ['Lost City (Males)', <?php echo $lostcityboys?>],
          ['Mbada',  <?php echo $mbada?>],
          ['Kgosi Dick Montshioa', <?php echo $kgosidick?>],
          ['Hopeville',  <?php echo $hope?>],
          ['Dr James Moroka',  <?php echo $james?>],
          ['Sol Plaatje',  <?php echo $sol?>],
          ['Sedibeng',  <?php echo $sed?>],
          ['Ngaka Modiri Molema',  <?php echo $ngaka?>],
          ['Dr Nelson Mandela',  <?php echo $nelson?>],
          ['Biko House',  <?php echo $biko?>],
          ['Khayelitsha',  <?php echo $khaya?>]
        ]);

        var options = {
          title: '',
          backgroundColor: {
        fill:'transparent'     
        },
           is3D: true,

           




        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));



        chart.draw(data, options);

      }
    </script>
  
  



                       
                   
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
<!-- end document-->
<?php } ?>