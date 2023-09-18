<?php 
$dbhost = "localhost";
$dbuser ="root";
$dbpassword ="";
$dbname ="users-info";
$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(!$con){
    echo("No Connection!!!");
}
echo("Connected!");
?>