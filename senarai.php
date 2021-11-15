<?php
session_start();

    $con = mysqli_connect('localhost','root','','student');
    $query="select * from pelajar";
    $result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pelajar</title>
</head>
<body>
<div class="col-md-12 ">
            <table align="center" style="width:1200px; line-height:40px;">
                <tr>
                    <td>Nama</td>
                    <td>No Matriks</td>
                    <td>Kelas</td>
                </tr>
                <?php
                while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['nama'];?></td>
                        <td><?php echo $rows['noMatriks'];?></td>
                        <td><?php echo $rows['kelas'];?></td>
                        <td><button><a href="edit.php">Edit</a></button></td>

                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
</body>
</html>