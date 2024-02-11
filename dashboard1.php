<?php
/*
session_start();
error_reporting(0);

if (!isset($_SESSION['first_name'])) {
    ?>
    <script>
        alert("You haven't logged in");
        location.href = 'login.php';
    </script>
    <?php
}*/
?>

<!DOCTYPE html>
<html>

<head>
    <?php// include "head.php" ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css\dashboard1.css">
</head>

<body>
    <div class="adminnav">
        <!--<div class="social">

            <a href=" https://www.facebook.com/trinaabh" class="facebook"><img src="img/facebook.png" width="24px"
                    height="24px" /></a>
            <a href="https://www.facebook.com/trinaabh" class="instagram"><img src="img/instagram.png" width="22px"
                    height="22px" /></a>
            <a href="https://www.linkedin.com/in/trinaabh-infotech-291617169/" class="youtube"><img
                    src="img/linkedin.png" width="24px" height="24px" /></a>
            <a href="https://twitter.com/TrinaabhI" class="twitter"><img src="img/twitter.png" width="27px"
                    height="27px" /></a>
            <a href="https://www.youtube.com/channel/UCNUJ9BiPSbAnN1W7IHpBlwA/videos" class="youtube"><img
                    src="img/youtube.png" width="24px" height="24px" /></a>

        </div>-->

        <div class="adminname">
            <pre> 'Hi' <i><?php
            session_start();
            error_reporting(0);
            if (isset($_SESSION['first_name'])) {
                echo $_SESSION["first_name"];
                //echo $_SESSION["user_id"];
            } ?> </i></pre>
        </div>
        <div class="srchlog">

            <div class="srchbar">
                <form action="#" class="srchform">
                    <input type="text" placeholder="Search" id="srchInput" name="search">
                </form>
            </div>
            <div class="logoutdiv"><button id="head-logout-btn" class="logoutbtn">Logout</button>
            </div>
        </div>
    </div>


    <div class="sidebar">
        <a class="active" id="dashboard" href="dashboard1.php">Dashboard </a>
        <a id="gallery" href="gallery.php" onclick="gallery(this); return false">Gallery</a>
        <a id="template" href="template.php" onclick="template(this); return false">Templates</a>
       
        <a id="help" href="#help" onclick="help(this); return false">Help</a>
    </div>

    <div class="content" id="frame-content">
        <?php include "./resume/dashboard1.php" ?>
    </div>

</body>

<script>
   /* document.getElementById("head-logout-btn").onclick = function () {
        //alert("Logged Out");
        location.href = "logout.php";
    };*/
    function gallery(current) {
        document.getElementById("frame-content").innerHTML = `<?php include "./resume/gallery.php" ?>`;
        var a = document.getElementsByTagName('a')
        for (i = 0; i < a.length; i++) {
            a[i].classList.remove('active');
        }
        current.classList.add('active');
    }
    function template(current) {
        document.getElementById("frame-content").innerHTML = `<?php include "./resume/template.php" ?>`;
        var a = document.getElementsByTagName('a')
        for (i = 0; i < a.length; i++) {
            a[i].classList.remove('active');
        }
        current.classList.add('active');
    }

    function help(current) 
        document.getElementById("frame-content").innerHTML = `<?php include "./resume/help.php" ?>`;
        var a = document.getElementsByTagName('a')
        for (i = 0; i < a.length; i++) {
            a[i].classList.remove('active');
        }
        current.classList.add('active');
    
</script>

</html>