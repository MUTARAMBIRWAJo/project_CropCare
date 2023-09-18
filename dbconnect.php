<?php

$dbhost = "localhost";
$dbuname = "root";
$dbpassword = "";
$dbname = "crop care";

$con = mysqli_connect($dbhost,$dbuname,$dbpassword,$dbname);

if($con){
    echo "You are now connected";
}
else{
    echo "You are not connected";
}

?>