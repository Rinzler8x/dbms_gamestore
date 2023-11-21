<?php

    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "dbmsproject";

    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname) or die("Connection failed: ".mysqli_connect_error());