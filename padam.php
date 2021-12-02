<?php
require 'conn.php';

$id_pelajar = $_GET['id_pelajar'];

$sql = "DELETE FROM pelajar WHERE id_pelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_pelajar);
$stmt->execute();

header('location: index.php')
;