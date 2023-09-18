<?php

$con= new mysqli("localhost","root","","fearnobirds");

if(isset($_POST['login'])){

$email= $_POST['email'];
$password= $_POST['password'];
 
$select="SELECT * FROM signup WHERE email='$email' limit 1";
$result= mysqli_query($con,$select);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0){
    if($password == $row['password']){
        header("location:MyHome.php");
    }
    else{
        echo "<script> alert(' Incorect password ');</script>";
    }
}
else{
    echo "<script> alert('User not Registered ');</script>";
}
}


?>