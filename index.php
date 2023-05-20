<?php

$conn= mysqli_connect('localhost','root','','newproject'); 


if(!$conn){ 
    echo 'Erorr' . mysqli_connect_error();
    ; }
 
 $FirstName = $_POST['FirstName'];
 
 $Email = $_POST['Email'];
 



 if (isset($_POST['submit'])) {

     $sql = "INSERT INTO students(FirstName , Email)
            VALUES( '$FirstName' ,  '$Email' )" ;
    
     mysqli_query($conn,$sql); 
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    
<form action="index.php" method="POST">
    
<h1>Student Registration Form </h1>
<div>
       <label for="FirstName">FirstName</label>
       <input type="text"  id="FirstName" name="FirstName">
    </div>
    <div>
        <label for="Email">Email</label>
        <input type="text"  id="Email" name="Email" >
     </div>
     
    <div>
        <input type="submit" value="send">
    </div>

</form>
</body>
</html>