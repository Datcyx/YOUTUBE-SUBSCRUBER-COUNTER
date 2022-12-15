<?php
include 'host.php';
$x = strpos($result,'subscribers"},');
$y = strpos($result,'subscribers"}}');
try {
$resultx ="";

//echo htmlspecialchars($result);



$x = strpos($result,'subscribers"},');
$y = strpos($result,'subscribers"}}');

$another = strpos($result,'subscriberCountText":{"accessibility":{"accessibilityData":{"label":"');

$another1 = strpos($result,'subscriber"}},"simpleText":"');







if($x ==false && $y == false){
   for ($xd = $another; $xd < $another1; $xd++) {
$resultx .=$result[$xd];

}
if($another ==false && $another1 == false){
echo "No subscribers";
}else{
    if ( strstr( $resultx, 'K s' ) ) {
$numbers ="K";
}else if ( strstr( $resultx, 'M s' ) ) {
$numbers ="M";
}else{
    $numbers ="";
}
    echo $numbers."Subscribers";
}
 
}else{
for ($xs = $y; $xs <= $x; $xs++) {
$resultx .=$result[$xs];
}
if ( strstr( $resultx, 'K s' ) ) {
$numbers ="K";
}else if ( strstr( $resultx, 'M s' ) ) {
$numbers ="M";
}else{
    $numbers ="";
}
echo $numbers." "."Subscribers"; 
}



}catch(Exception $e) {
  echo 'Loading';
}






?>