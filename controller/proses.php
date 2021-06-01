<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
     $db->input($_POST['nama'],$_POST['no_kursi'],$_POST['judul_film'],$_POST['jam_tayang'],$_POST['harga']);
     header("location:../view/tampil.php");
 }elseif($aksi == "hapus"){
     $db->hapus($_GET['id']);
     header("location:../view/tampil.php");
 }elseif($aksi == "update"){
     $db->update($_POST['id'],$_POST ['nama'],$_POST['no_kursi'],$_POST['judul_film'],$_POST['jam_tayang'],$_POST['harga']);
     header("location:../view/tampil.php");
 }
?>
