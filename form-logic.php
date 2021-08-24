<?php
session_start();
include 'join.php';
if(isset($_POST['uname'])&& isset($_POST['surname'])&& isset($_POST['district'])){
 $uname = $_POST['uname'];
 $surname = $_POST['surname'];
 $district = $_POST['district'];
$sql="INSERT INTO gatebe2 (Name,Surname,District) VALUES('$uname','$surname','$district')";
$result=mysqli_query($conn,$sql);
if($result){
    echo"record was saved";
}else{
    echo"Record was not saved successfully";
}
}
?>