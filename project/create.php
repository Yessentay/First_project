<?php
$con = new mysqli("localhost", "root", "", "project1");
$model = $_REQUEST["model"];
$manufacturer = $_REQUEST["manufacturer"];

$a = 0;
	if(!empty($manufacturer)){
		if(!empty($model)){
			
			$a = 1;
		}
	}
if($a==1){
	$query = "INSERT INTO `project1`(`news`, `image`) VALUES ('$model','$manufacturer')";
	mysqli_query($con, $query);
	header("location: aaa.php?page=news");
}
else{
	echo "Oops, error. <a href='aaa.php?page=add'>Back</a>";
}
$con->close();
?>