<?php
$sname="localhost";
$user_name = "root";
$password = "";
$dbname = "rwimiyaga";

$conn= mysqli_connect($sname,$user_name,$password,$dbname);
if(!$conn) {
    echo "Connection failed: ";
  }else {
    echo"connection successfull";
  }
?>