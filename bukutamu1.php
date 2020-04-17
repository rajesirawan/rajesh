<?php
$nama = $_GET['Nama'] ;
$alamat = $_GET['Alamat'] ;
$kota = $_GET['Kota'] ;
$kodepos = $_GET['KodePos'] ;
$propinsi = $_GET['pilih'] ;
$email = $_GET['E-Mail'] ;
$komentar = $_GET['komentar'] ;

if ($_GET['submit']) {
    echo "Nama : ".$nama."<br>" ;
    echo "Alamat : ".$alamat."<br>" ;
    echo "Kota : ".$kota."<br>" ;
    echo "Kode Pos : ".$kodepos."<br>" ;
    echo "Propinsi : ".$propinsi."<br>" ;
    echo "Email : ".$email."<br>" ;
    echo "Komentar : ".$komentar."<br>" ;
    }
    ?>