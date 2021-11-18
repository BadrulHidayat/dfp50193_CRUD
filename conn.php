<?php
$host = 'localhost';
$user = 'root';
$pswd = '';
$dbname='db_pelajar';

$conn = new mysqli($host,$user,$pswd,$dbname);
session_start();