<?php 
session_start();
include 'connect.php';
$sql = "DELETE FROM mahoro where id ='" . $_GET['id'] . "'";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Record was deleted successfully";
}else{
   echo "An Error Occured";
}
?>