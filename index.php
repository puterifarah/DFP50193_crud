<?php
require 'conn.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD</title>


</head>

<body>

    <table border="1" cellpadding="8" cellspacing="0" align="center">
        <tr bgcolor="#ffd700">
            <th>Bil</th>
            <th>Nama</th>
            <th>No Matriks</th>
            <th>Kelas</th>
            <th>Tindakan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM pelajar";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->noMatriks; ?></td>
                    <td><?php echo $row->kelas; ?></td>
                    <td>
                        <a href="kemaskini.php?id_pelajar=<?php echo $row->id_pelajar; ?>">Edit</a>
                        |
                        <a href="padam.php?id_pelajar=<?php echo $row->id_pelajar; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>

    <p align="center"><a href="daftar.php">Tambah Pelajar</a>


</body>

</html>