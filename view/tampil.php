<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <style type= "text/css">

    body{
        background : url('bg1.png') no-repeat;
        background-size: cover;
        ;
    }

 </style>

</head>

<body>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/style.css">
<?php
    require_once '../vendor/autoload.php';
    session_start();
?>
<?php
include '../model/database.php';
$db = new database();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="btn btn-primary" href="#">HELLO!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href ="input.php">Input Data</a>
      <a class="nav-item nav-link" href="../logout/logout.php">Logout</a>
    </div>
  </div>
</nav>
<div class="container">
<center>
  <p>
<h1>FORM PEMBELIAN TIKET BIOSKOP</h1>


<div class="effect2 spasi">
<p>
                    <div class="table"><?php
                    echo '<div class="panel-heading">SELAMAT DATANG DI PEMBELIAN TIKET BIOSKOP</div><div class="panel-body">';
               ?>
                    
 <center>                   
<table border = "2">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No Kursi</th>
        <th>Judul Film</th>
        <th>Jam Tayang</th>
        <th>Harga</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $x['nama']; ?></td>
            <td><?php echo $x['no_kursi']; ?></td>
            <td><?php echo $x['judul_film']; ?></td>
            <td><?php echo $x['jam_tayang']; ?></td>
            <td><?php echo $x['harga']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                <a href="../controller/proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
            </td>
            </tr>
           
<?php 
} 
?>
</table>
</center>
</html>