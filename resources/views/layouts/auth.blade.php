<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
        <!--320-->
        <title>Piluku</title>
        <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
        <!-- Bootstrap CSS -->

        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">    
        <!-- custom scrollbar stylesheet -->
        <link rel="stylesheet" href="assets/css/material.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/lock.css">
    </head>
    <body>
        <div class="signin_wrapper">
            <div class="row">
                <div class="overlay_block">
                    <div class="center_block"> 
                        <div id="clockbox"></div>
                        <div id="clockboxd"></div>
                        <div class="user_info">
                            @yield('content')
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    <!-- wrapper -->
        <!-- jQuery -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/materialize.js"></script>
        <script src="assets/js/lockscreen.js"></script>

    </body>
</html>                        