<html>
<head>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
        a{
            text-decoration: none;
            font-family: "Agency FB";
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding-top: 0;
            padding-bottom: 0;
            padding-left: 0;
            padding-right: 10;
            overflow: hidden;
            background-color: black;
        }

        li {
            float: left;
        }

        li a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        h1{
            text-align: right;
        }

        li a:hover {
            background-color: #111;
        }
        
	</style>

</head>
<body>
    <div class="b">
                    <ul>
                        <li><img src="BBC_Logo.png" width="153px" style="margin-bottom:-10px"> </li>
                        <li><a class="active" href="aaa.php?page=news">Home</a></li>
                        <li><a href="aaa.php?page=add">Sign in</a></li>
                        <li><a href="aaa.php?page=about">About</a></li>

                    </ul>

                <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="BBC_Logo.png" alt="BBC" width="460" height="345">
        <div class="carousel-caption">
          <h3>BBC</h3>
          <p>Congratulation we have 1000000 person in our group</p>
        </div>
      </div>

      <div class="item">
        <img src="dlina.jpg" alt="Dlina" width="460" height="345">
        <div class="carousel-caption">
          <h3>Dislike</h3>
          <p>People in the world </p>spend much time serving in the internet</p>
        </div>
      </div>
    
      <div class="item">
        <img src="Poldi.jpg" alt="football" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chelsea</h3>
          <p>Okey GOOgle how prevent Costa fightnings</p>
        </div>
      </div>

      <div class="item">
        <img src="Simmons_Ben_lsu_151125.jpg" alt="NBA" width="460" height="345">
        <div class="carousel-caption">
          <h3>NBA</h3>
          <p>THe SUper-starsnight party/p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<?php
if(isset($_GET['page']))
    $page = $_GET['page'];
else{
    $page = "null";
}
if($page=='news'):


	$conn = new mysqli("localhost","root","","project1");
	$conn ->query("SET NAMES utf8");
	$result = $conn ->query("SELECT * FROM `project1` ORDER BY id");
?>
<?php
	while(($row=$result ->fetch_assoc())!=false){
		$pic = $row["image"]; ?>
		<div class="aa" >
			<?php
			echo "<img src='$pic' class = 'image'></br>";
			echo $row["news"];
			
			?>
		</div>
	<?php
	}
$conn ->close();
?>
<?php endif ?>




<?php
if($page=='about'):?>
    <h1>About</h1>
    <p>The Webby Awards is the leading international award honoring excellence on the Internet.

    Established in 1996 during the Web’s infancy, The Webbys is presented by the International Academy of Digital Arts and Sciences (IADAS) — a 1,000+ member judging body. The Academy is comprised of Executive Members, leading Web experts, business figures, luminaries, visionaries and creative celebrities, and Associate Members who are former Webby Winners, Nominees and other Internet professionals.</p>
    <h2>The Internet's highest honor.</h2>
    <p>-The New York Times</p>
    <img src="cd3b6a4c15d2ceac0c943913564m--podarki-k-prazdnikam-statuetka-ruka-pobeda.jpg" width="300" height="450">


   
<?php endif ?>



<?php
if($page=='add'):?>
    <div class="">

            <form action="create.php">
                PICTURE: <input name="manufacturer" type="text"></input>
                NEWS: <textarea name="model" class="asd"></textarea>
                <input type="submit" value="send"/>

            </form>
    </div>
            
            
            
        </div>
    
<?php endif ?>


</body>