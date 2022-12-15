<?php 
session_start();
if(isset($_SESSION["link"]) === false){
    header("location: set.php");
    exit;
}
?>

<!Doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<div class="mainwindow">
	<img src="https://yt3.ggpht.com/uVJzWWYMfKUZzT-rKTPH9blfoaKnEu6j3pWjDa0r5abxY433AuYfXmGRETxSauMTD1vdmkoZtQ=s900-c-k-c0x00ffffff-no-rj" class="banneryt" id="banneryt">

        <h3 class="ytchanneln">Loading</h3>
        <li style="list-style: none;margin:0 auto;
"><h5 class="ytchannelcount" id="subcount">0 </h5><h5 style="display: inline-block;" class="ytchannelcount" id="subcm"> Subscriber</h5></li>

    </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>

            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')

            Set URL - window.location.href = "http://localhost/1";

        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>