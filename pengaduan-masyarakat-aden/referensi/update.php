<?php

$Id = $_POST['Id'];
$nis = $_POST['nis'];
$name = $_POST['name'];
$class = $_POST['class'];

$db = new PDO("mysql:host=localhost;dbname=datasiswa",'root','');
$query = $db->query("UPDATE `tbdatasiswa` SET `nis`='$nis',`name`='$name'
,`class`='$class' WHERE `Id`='$Id'");

if($query){
    header ("location:home.php");
}