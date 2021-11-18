<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>Bil</th>
            <th>Nama</th>
            <th>No. Kad Pengenalan</th>
            <th>No. Matrik</th>
            <th>Kelas</th>
            <th>Tindakan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM data_pelajar";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->nama_pelajar; ?></td>
                    <td><?php echo $row->noIC_pelajar; ?></td>
                    <td><?php echo $row->noMatrik_pelajar; ?></td>
                    <td><?php echo $row->kelas; ?></td>
                    <td>
                        <a href="kemaskini.php?id_data_pelajar=<?php echo $row->id_data_pelajar; ?>">Edit</a>
                        |
                        <a href="padam.php?id_data_pelajar=<?php echo $row->id_data_pelajar; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
    <br>
    <a href="tambah.php"><button>Tambah Pelajar</button></a>
</body>

</html>