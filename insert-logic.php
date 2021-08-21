<?php
session_start();
include 'connect.php';
if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['contact'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
 $sql = "INSERT INTO mahoro(Name,Surname,Email,Contact) VALUES ('$name', '$surname', '$email','$contact')";
 $result = mysqli_query($conn, $sql);
 if ($result) {
     echo "New record created successfully";
   } else {
     echo "Data not saved";
   }
}
?>