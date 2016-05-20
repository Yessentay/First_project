<?php
  mysql_connect("localhost","root","");
  mysql_select_db("login");
  

 $login= $_REQUEST['username'];
 $password= $_REQUEST['password'];
 $password_2 = $_REQUEST["confirm"];

$a = 0;
if($password==$password_2){
$a=1;
}
if($a ==1){
$query = "SELECT * FROM log WHERE login='$login'";
$result = mysql_query($query);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) 
      {
           exit ("Sorry, this login already exists");
       }
        $query2 = "INSERT INTO log (login,password) VALUES('$login','$password')";
        $result2 = mysql_query ($query2);
    if ($result2=='TRUE')
      {
                 echo "<br><a class='success'>SUCCESS</a></br> <a class='main' href='Site_Kairat.php'>Main page</a>";

       }
      else{
        echo "";
      }
    }
   else{
    echo "<div class='confirm'><a class='confirm_a'>You enter wrong confirm password</a></div>";
   }
?>