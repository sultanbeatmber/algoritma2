<?php

$nisn1 = "SULTAN";
$harga = 13,000;
$nama_barang = "Kopi C++";
$NamaBarang1          = "Buku PHP SULTAN contoh pakai spasi banyak";
$harga = 4000;
$stok = 40;
// membuat variabel baru
$stok = 40;

// mengisi ulang variabel dengan nilai baru
$stok = 34;

// 1)	Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
// Contoh: Salah
// $!nama = "ahmadi";
// $46rosi = "ahmadi pembalap";
// Contoh: Benar
$nama = "SULTAN";
$rosi46 = "SULTAN BEAT MBER";
// 2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
// Contoh:
$nama_barang = "SULTAN BEAT MBER";
$namaPembeli = "SULTAN"; // menggunakan camelCase

// 3)	Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
// Contoh:
$nama_barang = "PC RAKITAN";
$namaPembeli = "SULTAN ZAN";
$harga = 10000000;

// 4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
// Contoh: Tiga variabel ini akan dianggap berbeda.
$Belajar = "PHP";
$BELAJAR = "Html";
$belajar = "Css";

// =================== cara mencetak =======================
echo
$nisn1, "<p>" .
    $harga, "<p>" .
    $nama_barang, "<p>" .
    $NamaBarang1, "<p>" .
    $harga, "<p>" .
    $stok, "<p>" .
    $nama, "<p>" .
    $rosi46, "<p>" .
    $nama_barang, "<p>" .
    $namaPembeli, "<p>" .
    $nama_barang, "<p>" .
    $namaPembeli, "<p>" .
    $harga, "<p>" .
    $Belajar, "<p>" .
    $BELAJAR, "<p>" .
    $belajar;