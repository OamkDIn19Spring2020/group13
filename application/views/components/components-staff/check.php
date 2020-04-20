
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrap">
        <div style="margin-left: 15%; margin-top: 2%">
            <h2 class="welcome" style="color: black;">Welcome, <span style="color: red; font-weight: bold;"><?= $this->session->userdata('userSession'); ?><span></h2>
            <h2 style="color:#E98B33">Now : <span class="time"></span></h2>
            <h2 class="date"></h2>
        </div>
        <br/>
        <button type="button" class="btn btn-danger" style="margin-left: 20%;">Check me in</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function(){
            function crDate(){
                var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var cdate = new Date();
                var date = `Date: ${cdate.getDate()}, ${months[cdate.getMonth()]} , ${cdate.getFullYear()}`;
                return date;
            }
            $(".date").text(crDate());

            function clock(){
                var cdate = new Date();
                var time = `${cdate.getHours()}:${cdate.getMinutes()}:${cdate.getSeconds()}`;
                return time;
            }

            setInterval(function(){
                $(".time").text(clock());
            },1000);

        });
    </script>
</body>
</html>