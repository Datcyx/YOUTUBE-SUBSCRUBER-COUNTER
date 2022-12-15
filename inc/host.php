<?php
session_start();

set_time_limit(0);

include 'variables.php';
$array = file($_SESSION["link"]);
foreach($array as $line){


    $result .= $line;


}


?>