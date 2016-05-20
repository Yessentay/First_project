<?php
$conn=mysqli_connect("localhost","root","","esen");

$login = $_REQUEST['username'];
$password=$_REQUEST["password"];

$result = mysqli_query($conn,"SELECT * FROM reg WHERE login='$login'");


$row = mysqli_fetch_array($result);
if(empty($row['password']))
{
	exit("EXCUSE ME.FILL THE BLANK");

}
else{
	if($row['password']==$password){
		header("location: aaa.php");
	}
	else{
		exit("SORRY YOU ENTER WRONG!!!");
	}
}
?>