<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'db_pelajar');
$query = "select * from data_pelajar";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pelajar</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            color: black;
        }
    </style>
</head>

<body>
    <b><h1 style="color: black; font-size:16px;">Senarai Pelajar </h1></b>

        <table style="width:800px; line-height:40px;">
            <tr>
                <td>Nama</td>
                <td>No Kad Pengenalan</td>
                <td>No Pendaftaran</td>
                <td>Kelas</td>
            </tr>
            <?php
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $rows['nama_pelajar']; ?></td>
                    <td><?php echo $rows['noIC_pelajar']; ?></td>
                    <td><?php echo $rows['noMatrik_pelajar']; ?></td>
                    <td><?php echo $rows['kelas']; ?></td>
                    <td>
                        <a href="edit.php?nama=<?php echo $row->nama; ?>">Edit</a>
                        |
                        <a href="padam.php?idmakanan=<?php echo $row->idmakanan; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                    </td>
                </tr>
                </tr>
            <?php
            }
            ?>
        </table>
</body>

</html>