<?php
//database details
$servername = "localhost";
$username = "root";
$password = "";
$database="myproject";

//creating connection
$connection= mysqli_connect($servername,$username,$password,$database);

if(!$connection){
    die('connection failed: ' . mysqli_connect_error());
}
// echo "Connected successfully";





?>