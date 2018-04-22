<?php
include "connect.php";

    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $telpon = $_GET['phone'];
    $kota = $_GET['kota'];
    
    $sql = "UPDATE bukutelpon SET nama='$nama', email='$email', tel='$telpon', kota='$kota' WHERE id=$id";
    $res=mysqli_query($link, $sql);
    
    

    // apakah query update berhasil?
    if( $res ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: baca.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }




?>