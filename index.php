<?php

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
                <img class="dokter" style="margin-top: 50px;" src="dokter.png" alt="" width="460px">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <img style="margin-top: 50px;" src="profil.png" alt="" width="100px">
                <h5 class="text-primary"
                    style="font-style: normal; font-weight: bold; font-family: poppins; font-size: 15px; margin-top: 10px;">
                    SELAMAT DATANG</h5>

                <!--Button-->
                <form class="" action="proses.php" method="post">
                    <div class="mb-3">
                        <select id="disabledSelect" name="poliklinik" class="form-select">
                            <option>Poliklinik</option>
                            <option>Klinik Bedah</option>
                            <option>Klinik Anak</option>
                            <option>Klinik Urologi</option>
                            <option>Klinik Penyakit Dalam</option>
                            <option>Klinik Mata</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" id="input-text" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="alamat" class="form-control" id="input-text"
                            placeholder="Alamat Lengkap">
                    </div>
                    <div class="mb-3">
                        <select id="disabledSelect" name="gender" class="form-select">
                            <option>Jenis Kelamin</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="agama" class="form-control" id="input-text" placeholder="Agama">
                    </div>
                    <div class="mb-3">
                        <input id="umur" name="umur" type="text" class="form-control" placeholder="Umur" />
                    </div>
                    <div class="d-grid gap-2">
                        <a href="submit.html"><button style="border-radius: 15px; padding-left: 46%; padding-right: 45%;" class="btn btn-primary" type="submit"
                                name="submit" value=<?php echo date("h:i:sa"); ?>>Submit</button></a>
                    </div>

                </form>
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