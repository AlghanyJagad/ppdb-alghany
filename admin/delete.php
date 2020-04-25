<?php
 session_start();
        include'../config/koneksi.php';
        include'../library/oop.php';
        $perintah = new oop();

@$table = "siswa";
@$where = "id = $_GET[id]";
@$redirect = "datasiswa.php";

    $perintah->hapus($con, $table, $where, $redirect);
?>