<?php

class database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "utsaulia_tic";
    var $con;

    function __construct(){
        $this->con= mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db($this->con,$this->db);
    }
    function tampil_data(){
        $data = mysqli_query($this->con,"select * from bioskop_aulia");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($nama, $no_kursi, $judul_film, $jam_tayang, $harga){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into bioskop_aulia
        values('','$nama','$no_kursi','$judul_film','$jam_tayang','$harga')");
    }
    function hapus($id){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from bioskop_aulia
        where id = '$id'");
    }
    function edit($id){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select *
        from bioskop_aulia where id = '$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$nama,$no_kursi,$judul_film,$jam_tayang,$harga){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update bioskop_aulia set
        nama='$nama',no_kursi='$no_kursi',judul_film='$judul_film',jam_tayang='$jam_tayang', harga='$harga' where id = '$id'");
    }
}
?>