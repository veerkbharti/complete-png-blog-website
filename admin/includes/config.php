<?php
session_start();
$DB_SERVER='localhost';
$DB_USERNAME='root';
$DB_PASSWORD='';
$DB_DATABASE='fuelpng';
$conn=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE) or die("Database is not connected !");
$location="http://localhost/allpngfree";
?>