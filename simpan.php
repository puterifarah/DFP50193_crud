<?php
require 'conn.php';

$nama = $_POST['nama'];
$noMatriks = $_POST['noMatriks'];
$kelas = $_POST['kelas'];

$sql = "INSERT INTO pelajar (nama, noMatriks,kelas) VALUES (?, ?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $nama, $noMatriks, $kelas);
$stmt->execute();


if ($conn->error) {
    #echo $conn ->error;
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
?>