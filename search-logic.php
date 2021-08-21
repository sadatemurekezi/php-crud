<?php
session_start();
include 'connect.php';

if(isset($_POST['search'])){
    $search = $_POST['search'];
    $sql = "SELECT * FROM mahoro where Name like '%$search%' ";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo $row["id"]. " " .$row["Name"]. "  " .$row["Surname"]. "  " .$row["Email"]. "  " .$row["Contact"]."<br>";
        }
    }else{
            echo "0 records";
        }
}
?>