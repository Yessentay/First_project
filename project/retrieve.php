<?php
$con = new mysqli("localhost", "root", "", "project1");

$query = "SELECT * FROM project1 ORDER BY id";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
for ($i=0;$i<$num;$i++){
	$row = mysqli_fetch_array($result);?>
	<?= $row["news"]?> <?= $row["image"]?>
	
<?php
}
$con->close();
?>
<form action="update.php">
		
	<input type="text" name="model"/></br>
		<input type="text" name="year"/></br>
		<input type="submit"/>
	</form>