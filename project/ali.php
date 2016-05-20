<?php
$con = new mysqli("localhost", "root", "", "esen");
$con ->query("SET NAMES utf8");
$login = $_REQUEST["username"];
$password = $_REQUEST["password"];
$password_2 = $_REQUEST["confirm"];
$a = 0;
if ($password==$password_2) {
	$a = 1;

}
if ($a == 1) {

	$query = "SELECT * FROM `reg` WHERE login = '$login' "
	; 
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);
	if (!empty($row["id"]) ) {
		exit("sorry");

		# code...
	}
	$query2 = "INSERT INTO `reg`(`login`, `password`) VALUES ('$login','$password')";
	$result2 = mysqli_query($con,$query2);

	if ($result2=="TRUE") {
		echo "SUCCESS";

    	header("location: aaa.php");
		# code...
	}
	else
	{
		echo "ERROR";
		header("location: login.php");
	}
}
	else 
	{
		echo "erorr  2";

	}

?>


