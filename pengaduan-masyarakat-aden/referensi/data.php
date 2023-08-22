<?php

session_start();

$nis=$_POST['nis'];
$name=$_POST['name'];
$class=$_POST['class'];

$db = new PDO("mysql:host=localhost;dbname=datasiswa","root","");
$query = $db->query("INSERT INTO `tbdatasiswa` VALUES ('','$nis','$name','$class')");

if($query){
    header ("location:home.php");
}