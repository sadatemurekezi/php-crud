<?php
session_start();
include 'connect.php';
if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['contact'])){ 
$sql1 = "UPDATE mahoro set id='" . $_POST['id'] ."', Name='" . $_POST['name'] . "',Surname='" . $_POST['surname'] . "',Email='" . $_POST['email'] . "',Contact='" . $_POST['contact'] . "' where id='" . $_POST['id'] ."'";
$result1 = mysqli_query($conn,$sql1);
if($result1){
    echo "Data updated successfully";
}else{
    echo "An Error Occured";
}
}
$sql = "SELECT * FROM mahoro where id ='" .$_GET['id'] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Update Info for Mahoro Users</h1>
    
    <div class="metoo">
    <form action=""  method="post">
       <label> ID</label>
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>" /><br>
        <input type="text" name="id" value="<?php echo $row['id'] ?>" /><br>
        <label> Name</label>
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>" /><br>
        <input type="text" name="name" placeholder="Type your name here" value="<?php echo $row['Name'] ?>" /><br>
        <label> Surname</label>
        <input type="text" name="surname" placeholder="Type your name here" value="<?php echo $row['Surname'] ?>" /><br>
        <label> E-mail</label>
        <input type="text" name="email" placeholder="Type your name here" value="<?php echo $row['Email'] ?>" /><br>
        <label> Contact </label>
        <input type="text" name="contact" placeholder="Type your name here" value="<?php echo $row['Contact'] ?>" /><br>
        <button><input type="submit" name="submit" value="Send"></button>
    </form>
    </div>
</body>

</html>