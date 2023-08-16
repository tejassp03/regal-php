<?php

/*$servername = "166.62.44.10:3306";
$username = "adminiid_member";
$password = "iclub@2018";
$dbname = "adminiid_member.iclub";*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regal_test";

/* Create connection */
$con =mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>