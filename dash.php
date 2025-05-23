<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}
$conn = mysqli_connect("localhost", "root", "", "dbmahasiswa");
$query = "select * from tbmahasiswa";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo mysqli_error($conn);
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Read Mysql</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambahmahasiswa.php" class="btn btn-warning">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">NAMA</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">PRODI</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $data) : ?>
                <tr>
                    <th scope="row"><?= $data['nim'] ?></th>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['prodi'] ?></td>
                    <td>
                        <a href="detail.php?nim=<?= $data['nim'] ?>" class="btn btn-primary">Detail</a>
                        <a href="edit.php?edit&nim=<?= $data['nim'] ?>" class="btn btn-warning">Edit</a>
                        <a href="aksi.php?del&nim=<?= $data['nim'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="logout.php?nim=<?= $data['nim'] ?>" class="btn btn-success">Logout</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>