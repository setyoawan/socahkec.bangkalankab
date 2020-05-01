<?php

//ARTIKEL
$data = $this->db->get('artikel')->result_array();

$jumlahDataPerHalaman = 3;
$jumlahData = count($data);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); // CEIL DIGUNAKAN UNTUK MEMBULATKAN "SELALU" KEATAS 
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$querytampil = "SELECT * FROM artikel ORDER by id DESC LIMIT $awalData, $jumlahDataPerHalaman";
$user = $this->db->query($querytampil)->result_array();


//KEGIATAN
$data2 = $this->db->get('kegiatan')->result_array();

$jumlahDataPerHalaman = 3;
$jumlahData = count($data2);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); // CEIL DIGUNAKAN UNTUK MEMBULATKAN "SELALU" KEATAS 
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$querytampil = "SELECT * FROM kegiatan ORDER by id DESC LIMIT $awalData, $jumlahDataPerHalaman";
$user2 = $this->db->query($querytampil)->result_array();

//GALERI
$data3 = $this->db->get('gambar')->result_array();

$jumlahDataPerHalaman = 6;
$jumlahData = count($data3);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); // CEIL DIGUNAKAN UNTUK MEMBULATKAN "SELALU" KEATAS 
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$querygaleritampil = "SELECT * FROM gambar ORDER by id DESC LIMIT $awalData, $jumlahDataPerHalaman";
$galeri = $this->db->query($querygaleritampil)->result_array();

?>