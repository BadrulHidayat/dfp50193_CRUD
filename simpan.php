<?php
require 'conn.php';

$nama = $_POST['nama_pelajar'];
$noIC = $_POST['noIC_pelajar'];
$noMatrik = $_POST['noMatrik_pelajar'];
$kelas = $_POST['kelas'];

$sql = "INSERT INTO data_pelajar (nama_pelajar, noIC_pelajar, noMatrik_pelajar, kelas) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssss', $nama, $noIC, $noMatrik, $kelas);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Nama pelajar tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}