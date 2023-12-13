<?php
$servername = "localhost";
$username = "iste240t44";
$password = "Occurrere8&delirious";
$dbname = "iste240t44";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if ($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);
}
?>