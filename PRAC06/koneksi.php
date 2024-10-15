<?php
    $server = "localhost";
    $user   = "root";
    $pw     = "";
    $namaDB = "karyawan";
    $port   = 3306;

    //buat koneksi
    // $koneksi = mysqli_connect($server, $user, $pw, $namaDB, $port) //hasil koneksi = true / false

    // if (!$koneksi){
    //     die ("Koneksi gagal: ". mysqli_connect_error());
    // }
    // aktifin mode exception untuk mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        //buat koneksi
        $koneksi = mysqli_connect($server, $user, $pw, $namaDB, $port); //hasil koneksi = true / false
    }
    catch (mysqli_sql_exception $erornih) {
        echo "Koneksi gagal" . $erornih->getMessage();
    }
    
?>