<html>
<head>
	<meta charset="UTF-8"/>
	<title>login</title>

	<style>
		
		}
		.Sign{
			color:black;
		}
		a{
			display: inline-block;
			margin-left:25px;
			text-decoration: none;
			color:white; 
		}
		.logpass{
			margin-top: 15%;
		}
		.logpass_1{
			margin-top:10%;
		}
		.label{
			color:white;
			display: block;
			width: 200px;
			margin-left:42%;
			margin-top:10px; 
			font-size:20px; 
			
		}
		.label_2{
			color:black;
			display: block;
			width: 100px;
			margin-left:45%;
			margin-top:20px; 
			font-size:20px; 
			font-weight: bold;
		}
		.inlog{
			height:30px; 
			width:200px;
			opacity:0.4;
			font-size:20px;  
		}
		
	</style>
</head>

<body>
	
	<?php
		$menpage = [["type"=>"sign","login"=>"Login","password"=>"Password"],
					["type"=>"reg","login"=>"Login","password"=>"Password","password_1"=>"Confirm password","email"=>"Email","name"=>"Name","surname"=>"Surname"]];
	?>

	<div class="Sign">
			
			<a href="login1.php?page=S">SIGN UP</a>
			<a href="login1.php?page=L">LOG IN</a>
		
	</div>


	<?php

	


	if(isset($_REQUEST['page']))
		$page = $_['page'];
	else{
		$page = "null";
	}

	foreach ($menpage as $key) {
		if($page == "L" && $key["type"] == "sign"): ?>
		<div class="logpass">
			<form action="logKairat.php">
				<label class="label"><?= $key["login"]?>
					<input class="inlog" name="login" type="text"/>
				</label>


				<label class="label"><?= $key["password"]?>
					<input class="inlog" name="password" type="password"/>
				</label>

				<input class="label_2" type="submit" value="Submit"/>
			</form>
		</div>

		
		<?php
		elseif($page == "S" && $key["type"]=="lo"):?>
			<div class="logpass_1">
				<form action="users.php">
				<label class="label"><?= $key["login"]?>
					<input class="inlog" name="login" type="text"/>
				</label>

				<label class="label"><?= $key["password"]?>
					<input class="inlog" name="pass" type="password"/>
				</label>


				<label class="label"><?= $key["password_1"]?>
					<input class="inlog" name="pass_1" type="password"/>
				</label>

				<label class="label"><?= $key["email"]?>
					<input class="inlog" name="mail" type="text"/>
				</label>

				<label class="label"><?= $key["name"]?>
					<input class="inlog" name="name" type="text"/>
				</label>

				<label class="label"><?= $key["surname"]?>
					<input class="inlog" name="sname" type="text"/>
				</label>

				<input class="label_2" type="submit" value="Submit"/>
			</form>

		</div>
		<?php endif ?>
	<?php	
	}
	?>
	

	

	

</body>
</html>