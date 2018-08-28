<?php
require('header.php');
require_once("sqlconnect.php");
$query=("SELECT id, username, date, leaving, reason FROM loa");
$result= $conn->query($query);
$row=mysqli_fetch_array($result);
$id= $_GET['id'];

$conn->query("DELETE from loa WHERE id='$id'");

//TESTING FOR RETURN
//echo "<h1>$id</h1>";

header("location:../leaveforms.php");