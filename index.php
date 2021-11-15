<?php

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $noMatriks = $_POST['noMatriks'];
    $kelas = $_POST['kelas'];


    $mysqli = new mysqli('localhost', 'root', '', 'student');
    $stmt = $mysqli->prepare("INSERT INTO pelajar(nama,noMatriks,kelas) VALUES(?,?,?)");
    $stmt->bind_param('sss',$nama,$noMatriks,$kelas);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
    header("Location: index.php");
    die;
}
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD</title>

    
  </head>
  <body>

        <h1>PELAJAR</h1>
        <hr>
        <div class="row">

               <form method="post">
                    <table>
                        <tr>
                            <th>Nama</th>
                            <td><input required type="text" class="form-control" name="nama"></td>
                        </tr>
                        <tr>
                            <th>No. Matrik</th>
                            <td><input required type="text" class="form-control" minlength="12" maxlength="12" name="noMatriks"></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><input required type="text" class="form-control" name="kelas"></td>
                        </tr>
                    </table>
                    <div class="form-group">
                       <button id="btn"name="submit" type="submit" class="btn btn-primary">Submit</button>
                   </div>

                 
               </form>
        </div>

        <p> <a href="senarai.php">List Senarai Pelajar</a> </p>

   
  </body>

</html>