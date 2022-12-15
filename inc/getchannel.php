<?php

include 'host.php';
$title1 = strpos($result,'<title>');
$title2 = strpos($result,'</title>');
while($title1 <= $title2){


$title1++;
$resultd .=$result[$title1];
}

$firstword = str_replace("- YouTube","",$resultd);
$secondworld = str_replace("title>","",$firstword);
$secondworlds = str_replace("</","",$secondworld);

$official =  $secondworlds;
echo $official;
?>