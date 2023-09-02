<?php

    $hostname = "localhost";
    $database = "ati_rest_api";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if(!$connect){
        die("Koneksi ke database gagal!");
    }
?>