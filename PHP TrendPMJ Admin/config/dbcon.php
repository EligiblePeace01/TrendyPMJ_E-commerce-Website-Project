<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "phpTrendyPMJ";

//Creating databae connection
$conn = mysqli_connect($host, $username, $database);

//Checking database connection
if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}
else{
    echo "Connected successfully";
}

?>