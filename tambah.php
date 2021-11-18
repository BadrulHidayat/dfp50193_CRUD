<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="simpan.php" method="post">
        <table>
            <tr>
                <td><label for="nama_pelajar">Nama</label></td>
                <td>
                    <input id="nama_pelajar" type="text" name="nama_pelajar" required >
                </td>
            </tr>
            <tr>
                <td><label for="noIC_pelajar">No. Kad Pengenalan</label></td>
                <td>
                    <input id="noIC_pelajar" type="text" minlength="12" maxlength="12" name="noIC_pelajar" required >
                </td>
            </tr>
            <tr>
                <td><label for="noMatrik_pelajar">No. Matrik</label></td>
                <td>
                    <input id="noMatrik_pelajar" type="text" minlength="12" maxlength="12" name="noMatrik_pelajar" required >
                </td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td>
                    <input id="kelas" type="kelas" name="kelas" required>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>