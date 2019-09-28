<?php
//koneksi ke database mysql, silahkan di rubah dengan koneksi ke table mahasiswa
$koneksi = mysqli_connect("localhost","root","","mahasiswa");

// cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
    echo "gagal melakukan koneksi ke MYQSL" . mysqli_connect_error();
}
?>