<?php
require 'conn.php';

$id_data_pelajar = $_GET['id_data_pelajar'];

$sql = "DELETE FROM data_pelajar WHERE id_data_pelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_data_pelajar);
$stmt->execute();

header('location: index.php');