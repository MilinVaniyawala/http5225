<?php
$connect = mysqli_connect('localhost', 'root', '', 'http5225');

// Check Connection
if (!$connect) {
    die("Connection Failed:" . mysqli_connect_error());
}
// echo "Connected Successfully!!!";
