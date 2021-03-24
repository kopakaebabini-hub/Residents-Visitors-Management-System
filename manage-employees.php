<?php
session_start();
error_reporting(0);  
$conn = mysqli_connect("localhost","root","","cvmsdb") or die("Database Not Connected");


if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    if(isset($_POST['submit']))
    {

        if(isset($_POST['term']))
        {

            $useradminname = mysqli_escape_string($conn, $_POST['adminname']);
            $username = mysqli_escape_string($conn, $_POST['username']);
            $userphone = mysqli_escape_string($conn, $_POST['phonenumber']);
            $useremail = mysqli_escape_string($conn, $_POST['email']);
            $userpassword = mysqli_escape_string($conn, $_POST['password']);
            $usertype = mysqli_escape_string($conn, $_POST['user']);
            $date = date('Y-m-d H:i:s');
            //$vdate = $_POST[CURDATE()];

            function validate($form_data)
            {
                $form_data = trim( stripcslashes( htmlspecialchars($form_data) ) );
                return $form_data;
            }

            $vuseradminname = validate($useradminname);
            $vusername = validate($username);
            $vuserphone = validate($userphone);
            $vuseremail = validate($useremail);
            $vuserpassword = validate($userpassword);
           // $vusertype = validate($usertype)

            if(!empty($vuseradminname) && !empty($vusername) && !empty($vuserphone) && !empty($vuseremail) && !empty($vuserpassword))
                {

                $pass = md5($vuserpassword, '' );
               

                $insert = "INSERT INTO `tbladmin`(`AdminName`,`UserName`,`MobileNumber`,`Email`,`Password`,`AdminRegdate`,`Usertype`) VALUES('$vuseradminname','$vusername','$vuserphone','$vuseremail','$pass','$date','$usertype')";

                if(mysqli_query($conn, $insert))
                {
                    
            
                echo "<script>alert('Data Captured'); &#128512; </script>";
                ?>

    <script>alert('Data captured');
    window.location = "/rvms/dashboard.php";
     </script>
    


<?php

                   
                }
                else
                {
                    $msg = "Some field are empty  &#128531;" ;
                     echo "<script>alert('Data not Captured'); &#128531; </script>";
                   
                }

            }
            else
            {
                $msg = "Empty Field Found";
            }

        }
        else
        {
            $msg = "Please Check Term And Condition";
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
   

    <!-- Title Page-->
    <title>Add Employee</title>
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

<body class="animsition" style="overflow-y: scroll;">
    <div class="page-wrapper2"><!-- i have put 2 in here to make thr form y axis scrolable-->


        <!-- HEADER MOBILE-->
        <?php include_once('includes/sidebar.php');?>
   
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header.php');?>
            <!-- HEADER DESKTOP-->

        <div class="main-content">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <p style="font-size:24px; color: blue;"> Add Employee
                             
                            </p>
                        </div>
                         <p style="font-size:12px; color:red" align="center">  </p>
                        


                        <div class="login-form" >
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Admin Name</label>
                                    <input class="au-input au-input--full" type="text" id="adminname" name="adminname" placeholder="Mr Kopakae Albert" required="true">
                                </div>

                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" id="username" name="username" placeholder="kopakae@admin" required="true">
                                </div>

                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="au-input au-input--full" type="text" id="phonenumber" name="phonenumber" placeholder="062 500 8389" required="true">
                                </div>

                                <div class="form-group">
                                    <label>Email Account</label>
                                    <input class="au-input au-input--full" type="text" id="email" name="email" placeholder="kopakaebabini@gmail.com" required="true">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" id="password" type="password" name="password" placeholder="*******">
                                </div>

                                <label>Type</label>
                                <select name="user" class="form-control" id="inputPassword" required>
                                    <option value="employee">Employee</option>
                                    <option value="admin">Admin</option>
                                </select>
                                
                               <input type="checkbox" name="term"> I consent to add the employee in the RVMS <br>
                               
                            </div>
                            
                             <input  type="submit" name="submit" value="Submit" class="au-btn au-btn--block au-btn--green m-b-20. " />

                         
                            </form>


                            <h3 style="color:red; "><?php echo @$msg; ?></h3> 

                        </div>
                      
                    </div>

                </div>
            
            </div>

        </div>

    </div>
 

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