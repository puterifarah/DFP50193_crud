<?php
require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>

<body>
    <?php
    $id_pelajar = $_GET['id_pelajar'];
    $sql = "SELECT * FROM pelajar WHERE id_pelajar = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id_pelajar);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_object();
    ?>
    
    <form action="kemaskini_simpan.php" method="post">
        <input type="hidden" name="id_pelajar" value="<?php echo $row->id_pelajar; ?>" />
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>
                    <input id="nama" type="text" name="nama" value="<?php echo $row->nama; ?>" required />
                </td>
            </tr>
            <tr>
                <td><label for="noMatriks">No Matriks</label></td>
                <td>
                    <input id="noMatriks" type="text" step="any" name="noMatriks" value="<?php echo $row->noMatriks; ?>" required />
                </td>
            </tr>

            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td>
                    <input id="kelas" type="text" step="any" name="kelas" value="<?php echo $row->kelas; ?>" required />
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