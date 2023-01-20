<?php
// koneksi database
include 'koneksi.database';

// menangkap data id yang di kirim dari url
$id = $_GET['id_siswa'];


// menghapus data dari database
mysqli_query($db, "DELETE from tb_jurusan where id_jurusan ='$id'");
mysqli_query($db, "DELETE from tb_spp where id_spp ='$id'");
mysqli_query($db, "DELETE from tb_siswa where id_siswa ='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tabeljoin.php");

?>
