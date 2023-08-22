<?php

$Id = $_GET['Id'];

$db = new PDO("mysql:host=localhost;dbname=datasiswa",'root','');
$query = $db->query("DELETE  FROM `tbdatasiswa` WHERE  `Id`='$Id'");

if($query)
{
    header("location:home.php");
}