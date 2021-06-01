<?php
  include '../model/database.php';
  $db= new database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="regist/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="regist/css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                        <img class="booking-img" src="regist/images/bgg2.jpg" width=1000px height=900px alt="booking image">
                </div>
                <div class="booking-form">
                        <h1>FORM PEMBELIAN TIKET BIOSKOP</h1>
                        <h2>Tambah Data User</h2>
                        <form action="../controller/proses.php?aksi=tambah" method="post">
                            <div class="form-group form-input">
                                <input type="text" name="nama" id="nama" value="" required />
                                <label for="name" class="form-label">Nama</label>
                            </div>
                            <div class="form-group form-input">
                                <input type="text" name="no_kursi" id="no_kursi" value="" required />
                                <label for="name" class="form-label">No Kursi</label>
                            </div>
                            <div class="form-group form-input">
                                <input type="text" name="judul_film" id="judul_film" value="" required />
                                <label for="name" class="form-label">Judul Film</label>
                            </div>
                            <div class="form-group form-input">
                                <input type="text" name="jam_tayang" id="jam_tayang" value="" required />
                                <label for="name" class="form-label">Jam Tayang</label>
                            </div>
                            <div class="form-group form-input">
                                <input type="number" name="harga" id="harga" value="" required />
                                <label for="name" class="form-label">Harga</label>
                            </div>
                            <div class="form-submit">
                            <input type="submit" value="Save" class="submit" id="submit" name="submit" />
                       
                        </div>
                        </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="regist/vendor/jquery/jquery.min.js"></script>
    <script src="regist/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>