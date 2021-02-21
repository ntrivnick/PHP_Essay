<?php

$dbPassword="";
$dbUserName="root";
$dbServer="localhost";
$dbName="ntrivalas_db_std100164";

$connection=new mysqli($dbServer,$dbUserName,$dbPassword,$dbName);

if ($connection->connect_errno) {
    exit("Η σύνδεση με τη ΒΔ απέτυχε. Σφάλμα: ".$connection->connect_error);
}