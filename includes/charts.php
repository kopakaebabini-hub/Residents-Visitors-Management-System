<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
   
    <title>How to create dynamic pie chart - Coding Birds Online</title>
    <style> .center-block { display: block;margin-left: auto;margin-right: auto; }</style>
</head>
<body>
<div class="container">
    <center>
        <div id="containers"></div>
    </center>
    <img class="center-block" src="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" width="50">
 </div>
<?php
$con=mysqli_connect("localhost", "root", "", "cvmsdb"); // connection file with database
//$query = "SELECT * FROM `users` ";
$query = "SELECT * from residents "; // get the records on which pie chart is to be drawn
$getData = $con->query($query);
?>
<script>
    // Build the chart
    Highcharts.chart('containers', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Programming Language Popularity, 2020'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Popularity',
            colorByPoint: true,
            data: [
                <?php
                $data = '';
                if ($getData->num_rows>0){
                    while ($row = $getData->fetch_object()){
                        $data.='{ name:"'.$row->Res_name.'",y:'.$row->ID.'},';
                    }
                }
                echo $data;
                ?>
            ]
        }]
    });
</script>
</body>
</html>

  

