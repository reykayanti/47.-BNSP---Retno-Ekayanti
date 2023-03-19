<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "bnsp");

//variabel nim yang dikirimkan form.php
$nama = $_GET['nama'];

//mengambil data
$query = mysqli_query($koneksi, "select * from mahasiswa where nama='$nama'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  @$mahasiswa['nama'],
            'ipk'      =>  @$mahasiswa['ipk'],
        );

//tampil data
echo json_encode($data);
?>