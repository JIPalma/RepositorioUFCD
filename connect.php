<?php
//comments THIS IS A PURE PHP FILE TO CONNECT TO THE DATABASE
error_reporting(E_ALL);

$servername = "db-formadorsos-do-user-8616909-0.b.db.ondigitalocean.com";
$username = "doadmin";
$password = "AVNS_gRNgaLZJCwCn4dP";
$dbname = "defaultdb";
$port = "25060";

$mysqli = new mysqli($servername, $username, $password, $dbname, $port);

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  else{
    $db_on= "Ligado à DB";
  }

?>