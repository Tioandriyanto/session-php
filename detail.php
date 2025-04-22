<?php
$conn = mysqli_connect("localhost", "root", "", "dbmahasiswa");
$nim = $_GET['nim'];
$query = "select * from tbmahasiswa where nim ='$nim'";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo mysqli_error($conn);
}
$data = mysqli_fetch_assoc($result);
// var_dump($data);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail</title>
</head>

<body>
    <div class="container">
        <div class="card text-center mt-4">
            <div class="card-header">
                Detail
            </div>
            <div class="card-body">
                <h5 class="card-title">Detail Mahasiswa</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">NIM : <?= $data['nim'] ?></li>
                    <li class="list-group-item">NAMA : <?= $data['nama'] ?></li>
                    <li class="list-group-item">ALAMAT : <?= $data['alamat'] ?></li>
                    <li class="list-group-item">PRODI : <?= $data['prodi'] ?></li>
                </ul>
                <p class="card-text"></p>
                <a href="http://localhost/web/p15/dash.php" class="btn btn-primary">Kembali Ke Halaman Utama</a>
            </div>
            <div class="card-footer text-muted">
                Prodi TI
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>