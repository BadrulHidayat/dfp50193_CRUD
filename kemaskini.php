<?php
require 'conn.php';

    $id_data_pelajar = $_GET['id_data_pelajar'];
    $sql = "SELECT  * FROM data_pelajar WHERE id_data_pelajar = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id_data_pelajar);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_object();
    ?>
    <form action="kemaskini_simpan.php" method="post">
        <input type="hidden" name="id_data_pelajar" value="<?php echo $row->id_data_pelajar; ?>"/>
        <table>
            <tr>
                <td><label for="nama_pelajar">Nama</label></td>
                <td>
                    <input id="nama_pelajar" type="text" name="nama_pelajar"
                           value="<?php echo $row->nama_pelajar; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="noIC_pelajar">No. Kad Pengenalan</label></td>
                <td>
                    <input id="noIC_pelajar" type="text" minlength="12" maxlength="12" name="noIC_pelajar"
                           value="<?php echo $row->noIC_pelajar; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="noMatrik_pelajar">No. Matrik</label></td>
                <td>
                    <input id="noMatrik_pelajar" type="text" minlength="12" maxlength="12" name="noMatrik_pelajar"
                           value="<?php echo $row->noMatrik_pelajar; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="kelas">No. Kad Pengenalan</label></td>
                <td>
                    <input id="kelas" type="kelas" name="kelas"
                           value="<?php echo $row->kelas; ?>" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>