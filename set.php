<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   $link =  $_POST["name"];
   $xa = trim($link);
   $pos  = strpos($link,'youtube.com');
   if($pos == false){
    echo "Not a youtube link";

    }else{
      $_SESSION["link"] = $xa;
         header("location: index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Set</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<input type="text" placeholder="Enter Link" name="name">
 <input type="submit" class="btn btn-primary" value="Set">
	</form>
</body>
</html>