<?php
$koneksi = mysqli_connect ("localhost", "root", "", "daftar");

$poliklinik = $_POST['poliklinik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$agama = $_POST['agama'];
$umur = $_POST['umur'];
$submit = $_POST['submit'];

$query = "INSERT INTO daftar VALUES('$poliklinik','$nama','$alamat','$gender','$agama','$umur','$submit')";

mysqli_query($koneksi, $query);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css.css" rel="stylesheet" type="text/css">

    <title>RS Triharsi</title>
</head>

<body>

    <!--Head-->
    <div class="container">
        <div class="row">
            <div class="col order-first mt-3">
                <img src="logo.png" alt="" width="70px">
            </div>
            <div class="col text-center mt-3">
                <h4 class="text-primary" style="font-style: normal; font-weight: bold; font-family: poppins; ">RUMAH
                    SAKIT UMUM
                    TRIHARSI</h4>
                <p class="text-secondary"
                    style="margin-top: -10px; font-style: normal; font-weight: lighter; font-family: poppins; font-size: 15px;">
                    Jl. Ambon Tuangalay Pukare. Telp: 083112335456</p>
                <p class="text-secondary"
                    style="font-size: 12px; margin-top: -15px; font-style: normal; font-weight: lighter; font-family: poppins;;">
                    Email: agungajikjabar@gmail.com</p>
            </div>
            <div class="col order-last">

            </div>
        </div>
    </div>

    <hr style="margin-top: -3px; height: 3px; color: blue;">
    <!--Akhir Head-->

    <div class="container text-center tulisan">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <img class="dokter" style="margin-top: 50px;" src="submit.png" alt="" width="590px">
            </div>
            <div class="data col-sm-6 col-md-6 col-lg-6">
                <div style="border-radius: 20px; margin-top: 90px;" class="alert alert-secondary" role="alert">
                    <h4 class="alert-heading text-primary">Pendaftaran Berhasil!</h4>
                    <img class="mt-3" src="berhasil.png" alt="" width="100px">
                    <p class="mt-4">Terimakasih telah melakukan pendaftaran pada Fasilitas Pelayanan Kesehatan kami!</p>
                    <hr>
                    <p class="mb-0 text-success fw-bold">No. Rekam Medis anda : 13650
                    </p>
                </div>

                <!--Button-->

                <div class="d-grid gap-2">
                    <a href="index2.html" style="border-radius: 15px; " class="btn btn-outline-primary mb-2"
                        type="button">Kembali</a>
                </div>
               
                <!--Akhir Button-->

            </div>
        </div>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>