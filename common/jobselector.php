<?php
//Requirements
require_once("common/sqlconnect.php");



//$job = "1";
$id = $_GET['id'];;

//SQL Query
$sql = "SELECT id, username, date, pickup_city, destination_city, pickup_company, destination_company, distance, convoy, cargo, weight, potential_income, total_income, total_damage, notes FROM user_jobs WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$username = $row["username"];
$d = $row["date"];
$pcity = $row["pickup_city"];
$dcity = $row["destination_city"];
$pcompany = $row["pickup_company"];
$dcompany = $row["destination_company"];
$distance = $row["distance"];
$convoy = $row["convoy"];
$cargo = $row["cargo"];
$weight = $row["weight"];
$pincome = $row["potential_income"];
$tincome = $row["total_income"];
$tdamage = $row["total_damage"];
$notes = $row["notes"];
//
//if ($job == 1) {

//}
//else {
//
//  $row = $result->fetch_assoc();
//  $id = $row["id"];
//  $username = $row["username"];
//  $d = $row["date"];
//  $pcity = $row["pickup_city"];
//  $dcity = $row["destination_city"];
//  $pcompany = $row["pickup_company"];
//  $dcompany = $row["destination_company"];
//  $distance = $row["distance"];
//  $convoy = $row["convoy"];
//  $cargo = $row["cargo"];
//  $weight = $row["weight"];
//  $pincome = $row["potential_income"];
//  $tincome = $row["total_income"];
//  $tdamage = $row["total_damage"];
//  $notes = $row["notes"];
//
//
//}


//VARIABLES

//$row = $result->fetch_assoc();


