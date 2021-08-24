<?php
$sname="localhost";
$user_name="root";
$password="";
$dbname = "crud";
$conn=mysqli_connect($sname,$user_name,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

?>