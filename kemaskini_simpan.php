<?php
require 'conn.php';

$id_pelajar = $_POST['id_pelajar'];
$nama = $_POST['nama'];
$noMatriks = $_POST['noMatriks'];
$kelas = $_POST['kelas'];

$sql = "UPDATE pelajar SET nama = ?, noMatriks = ?, kelas = ? WHERE id_pelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssi', $nama, $noMatriks,$kelas, $id_pelajar);
$stmt->execute();

if ($mysqli->error) {
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