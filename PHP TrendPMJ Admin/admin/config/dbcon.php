<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "phpTrendyPMJ";

    // Creating database connection
    $con = mysqli_connect($host, $username, $password, $database);

    // chech database connection
    if(!$con)
    {
        die("connection Failed: ".mysqli_connect_error());
    }
    else
    {
        echo "connection successfully";
    }

    
?>