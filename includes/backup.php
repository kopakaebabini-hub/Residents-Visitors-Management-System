<?php
   

   $host = "localhost";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass, "cvmsdb");
   
   //$conn = mysql_connect('localhost','root','');
  // mysqli_select_db($conn,'cvmsdb');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
	
   $table_name = "residents";
   $backup_file  = "/C:/residents.sql";
   $sqli = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
   
  //mysql_select_db('cvmsdb');
   $retval = mysql_query( $sqli, $conn );
   
   if(! $retval ) {
      die('Could not take data backup: ' . mysql_error());
   }
   
   echo "Backedup  data successfully\n";
   
   mysql_close($conn);
?>