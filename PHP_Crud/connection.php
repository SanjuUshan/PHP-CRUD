<?php 
//mysql_connect("database-host","user name","password");
// $conn= mysql_connect("localhost","root"," ") or die("Cannot connected");

$databaseHost = 'localhost';
$databaseName = 'phpCrud';
$databaseUserName = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost,$databaseUserName,$databasePassword,$databaseName);




?>