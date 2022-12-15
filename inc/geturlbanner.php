<?php 


include 'host.php';
$banner1 = strpos($result,'],"avatar":{"thumbnails":');
$banner2 = strpos($result,'channelUrl');


while($banner1 <= $banner2){


$banner1++;
$resultg .=$result[$banner1];
}
$fstringurl = str_replace(',"avatar":{"thumbnails":[{"url":"',"",$resultg);
$sstringurl = str_replace('","width":900,"height":900}]},"ch',"",$fstringurl);
$final = $sstringurl;
echo $final;





?>