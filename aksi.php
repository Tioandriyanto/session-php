<?php
$conn = mysqli_connect("localhost", "root", "", "dbmahasiswa");
if (isset($_POST['add'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];

    $query = "INSERT INTO tbmahasiswa (nim, nama, alamat, prodi) VALUES ('$nim', '$nama', '$alamat', '$prodi')";

    if (mysqli_query($conn, $query)) {
        // echo "data berhasil ditambahkan";
        $msg = "Data berhasil ditambahkan";
    } else {
        // echo "data gagal ditambahkan" . mysqli_error($conn);
        $msg = "Data gagal ditambahkan" . mysqli_error($conn);
    }
} elseif (isset($_GET['del'])) {
    $nim = $_GET['nim'];
    $query = "DELETE FROM tbmahasiswa WHERE nim='$nim'";
    if (mysqli_query($conn, $query)) {
        // echo "data berhasil dihapus";
        $msg = "Data berhasil dihapus";
    } else {
        // echo "data gagal dihapus" . mysqli_error($conn);
        $msg = "Data gagal dihapus" . mysqli_error($conn);
    }
} elseif (isset($_POST['edit'])) {
    //echo "tombol edit di tekan";
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];

    $query = "UPDATE tbmahasiswa SET nim='$nim', nama='$nama', alamat='$alamat', prodi='$prodi' WHERE nim='$nim'";
    if (mysqli_query($conn, $query)) {
        // echo "data berhasil diupdate";
        $msg = "Data berhasil edit";
    } else {
        // echo "data gagal diupdate" . mysqli_error($conn);
        $msg = "Data gagal edit" . mysqli_error($conn);
    }
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

    <title>Aksi</title>
</head>

<body>
    <div class="container"></div>
    <div class="card mt-4">
        <h5 class="card-header">
            Aksi
        </h5>
        <div class="card-body">
            <h5 class="card-title">Informasi</h5>
            <p class="card-title">
                <?php if (isset($msg))
                    echo $msg;
                ?>
            </p>

            <a href="http://localhost/web/p15/dash.php" class="btn btn-primary">Kembali ke home</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>