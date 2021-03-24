<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "cvmsdb");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "select *from tblvisitor where FullName like '%".$search."%'||Student_num like '%".$search."%'||WhomtoMeet like '%".$search."%'||Res like '%".$search."%'";
}
else
{
 $query = "
  SELECT * FROM tblvisitor ORDER BY ID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>FullName</th>
     <th>Student Number</th>
     <th>WhomtoMeet</th>
     <th>Res</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["FullName"].'</td>
    <td>'.$row["Student_num"].'</td>
    <td>'.$row["WhomtoMeet"].'</td>
    <td>'.$row["Res"].'</td>
    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>