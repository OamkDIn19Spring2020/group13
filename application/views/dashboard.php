<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Management System</title>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../css/style2.css">
        <link rel="stylesheet" href="../css/all.css">

        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="../js/main.js"></script>
        <style>
            body {
                  color: blue;
                }
                a {
                  color: inherit; /* blue colors for links too */
                  text-decoration: inherit; /* no underline */
                }
        </style>
    </script>

    </head>
    <body>
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
                        <div id="curve_chart" style="width: 120%; height: 250px"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>