<?php 
session_start();
include 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" Type="text/css"  href="viewstyle.css"/>
</head>
<body class="demo1">
    <marque direction="right"> <h1 class="demo2"> Registered Students</h1></marquee>
    <table border="2"    width="900px"; class="demo3">
        <thead>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Surname</td>
        <td>Email</td>
        <td>Contact</td>
        <td>Action</td>
        <td>Action</td>
    </tr>
    </thead>
    <?php
    $sql = "SELECT id,Name,Surname,Email,Contact from mahoro";
    $result = mysqli_query($conn,$sql);
 
    if($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            ?>
            <tr>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['Name'];?></td>
           <td><?php echo $row['Surname'];?></td>
           <td><?php echo $row['Email'];?></td>
           <td><?php echo $row['Contact'];?></td>
           <td><a href="delete-logic.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
           <td><a href="update-logic.php?id=<?php echo $row["id"]; ?>">Update</a></td>
            </tr>
            <?php
        }
            ?>
    </table>
    <?php
    }
    else{
        echo "No results Found";
    }
    ?>
</body>
</html>
