<?php


$con=mysqli_connect("localhost", "root", "", "cvmsdb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}




// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];

// Connect to the database
//$con=mysqli_connect("localhost", "root", "", "cvmsdb");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
//mysql_select_db("cvmsdb",$con);

$result = mysql_query("SELECT users_email, users_pass FROM users WHERE users_email = $email");

$row = mysql_fetch_array($result);

if($row["users_email"]==$email && $row["users_pass"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>