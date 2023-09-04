<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "db";
$connect = mysqli_connect($host, $username, $pass);
if (!$connect) {
    echo "Failed connecting to db";
} else {
    $select_db = mysqli_select_db($connect, $db);
    if (!$select_db) {
        echo "DB not found";
    } else {
        $select_db;
    }
}
