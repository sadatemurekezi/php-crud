<?php
$sname = "localhost";
$user_name="root";
$password="";
$db="gatebe";

$conn=mysqli_connect($sname,$user_name,$password,$db);
if($conn){
    echo "database connected ";
}else{
    echo"Data not Saved!";
}
?>