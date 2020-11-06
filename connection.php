<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    if ($connection) {
        echo "";
    } else {
        die("Connection failed because " . mysqli_connect_error());
    }
