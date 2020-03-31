<?php
 
 $dataPoints = array(
    array("x" => 946665000000, "y" => 3289000),
    array("x" => 978287400000, "y" => 3830000),
    array("x" => 1009823400000, "y" => 2009000),
    array("x" => 1041359400000, "y" => 2840000),
    array("x" => 1072895400000, "y" => 2396000),
    array("x" => 1104517800000, "y" => 1613000),
    array("x" => 1136053800000, "y" => 1821000),
    array("x" => 1167589800000, "y" => 2000000),
    array("x" => 1199125800000, "y" => 1397000),
    array("x" => 1230748200000, "y" => 2506000),
    array("x" => 1262284200000, "y" => 6704000),
    array("x" => 1293820200000, "y" => 5704000),
    array("x" => 1325356200000, "y" => 4009000),
    array("x" => 1356978600000, "y" => 3026000),
    array("x" => 1388514600000, "y" => 2394000),
    array("x" => 1420050600000, "y" => 1872000),
    array("x" => 1451586600000, "y" => 2140000)
 );
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Responsive vertical menu navigation</title>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../css/style2.css">
        <link rel="stylesheet" href="../css/all.css">

        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="../js/main.js"></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Sales'],
          ['Jan',  1000],
          ['Feb',  1170],
          ['Mar',  660],
          ['Apr',  470]
          // ['May',  1030],
          // ['Jun',  1030],
          // ['July',  1030],
          // ['Aug',  1030],
          // ['Sep',  1030],
          // ['Oct',  1030],
          // ['Nov',  1030],
          // ['Dec',  1030]
        ]);

        var options = {
          title: 'Hotel Income Chart',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    </head>
    <body>
        <div class="header">
            <div class="logo">
                <i class="fas fa-tachometer-alt"></i>
                <span>Group 13</span>
            </div>
            <a href="#" class="nav-trigger"><span></span></a>
        </div>
        <div class="side-nav">
            <div class="logo">
                <i class="fas fa-tachometer-alt"></i>
                <span>Group 13</span>
            </div>
            <nav>
                <ul>
                    <div class="sidebar-user">
                        <img src="../img/user.png" alt="Linda Miller" class="tab-username sidebar-user">

                        <div class="font-weight-bold">Vic
                        </div>

                        <small>Front-end Developer</small>
                    </div>  

                    <li>
                        <a href="#">
                            <span><i class="fa fa-user"></i></span>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">

                            <span><i class="fa fa-envelope"></i></span>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <span><i class="fa fa-bar-chart"></i></span>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="fas fa-money-check"></i></span>
                            <span>Payments</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout">
                            <span><i class="fas fa-sign-out-alt"></i></span>
                            <span>Log-out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <div class="title">
                Analytics
            </div>
            <div class="main">
                <div class="widget">
                    <div class="title">
                        <i class="fas fa-money-bill"></i>&nbsp;
                        Income
                    </div>
                    <div class="chart">
                        
                    </div>
                </div>
                <div class="widget">
                    <div class="title">Today's Stats</div>
                    <div class="chart"></div>
                </div>
                <div class="widget">
                    <div class="title">Room Availability</div>
                    <div class="chart"></div>
                </div>
                <div class="widget">
                    <div class="title">Room Availability</div>
                    <div class="chart"></div>
                </div>
                <div class="widget">
                    <div class="title">
                        <i class="far fa-chart-bar"></i>&nbsp;
                        Income
                    </div>
                    <div class="chart">
                        <div id="curve_chart" style="width: 120%; height: 300px"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>