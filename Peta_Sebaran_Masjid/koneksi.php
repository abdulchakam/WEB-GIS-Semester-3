<?php
        //buat koneksi ke database
        $host='localhost';
        $user='root';
        $pass='';
        $db='db_semarang';
        $conn=mysqli_connect($host, $user, $pass, $db);
        if(!$conn){
            echo 'Koneksi Gagal!';
        }
?>