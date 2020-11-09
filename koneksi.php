<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "blog";

$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn, $dbname);
