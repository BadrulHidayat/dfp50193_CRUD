<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_pelajar";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect");
}