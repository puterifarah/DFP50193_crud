<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>

    <div class="container">
        <h2>INFO PELAJAR</h2>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <form method="post" action="simpan.php">
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
                    <hr>
                    <div class="form-group">
                        <button id="btn" name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>

</html>