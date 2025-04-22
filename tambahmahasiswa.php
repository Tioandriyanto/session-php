<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data</title>
</head>

<body>
    <div class="container"></div>
    <div class="card mt-4">
        <h5 class="card-header">Tambah Data Mahasiswa</h5>
        <div class="card-body">
            <form method="post" action="aksi.php">
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="teks" class="form-control" id="nim" name="nim">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">NAMA</label>
                    <input type="teks" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">ALAMAT</label>
                    <input type="teks" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">PRODI</label>
                    <input type="teks" class="form-control" id="prodi" name="prodi">
                </div>
                <button type="submit" class="btn btn-primary" name="add">TAMBAH</button>
            </form>

        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>