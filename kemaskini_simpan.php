<?php
require 'conn.php';

$id = $_POST['id_data_pelajar'];
$nama = $_POST['nama_pelajar'];
$noIC = $_POST['noIC_pelajar'];
$noMatrik  = $_POST['noMatrik_pelajar'];
$kelas = $_POST['kelas'];

$sql = "UPDATE data_pelajar SET nama_pelajar = ?, noIC_pelajar = ?, noMatrik_pelajar = ?, kelas = ? WHERE id_data_pelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssssi', $nama, $noIC, $noMatrik, $kelas, $id);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Nama makanan tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}