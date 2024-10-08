<?php

// Char adalah tipe data yang terdiri dari karakter. Penulisannya diapit dengan tanda petik satu.
$huruf = 'E';

// String adalah tipe data yang terdiri dari kumpulan karakter. Penulisannya diapit dengan tanda petik ganda.
$alamat = "Jl. Mawar, Jakarta";

// Tipe Data Integer di PHP
// Contoh:
$nilai = 98; // angka positif
$poin = -31; // angka negatif

// Tipe Data Float di PHP
// Float adalah tipe data bilangan pecahan. Sama seperti integer, tipe data ini ditulis tanpa tanda petik.
// Contoh:
$panjang = 233.12;
$kapasistas = 13232.12;
// Kada juga tipe data float ditulis dalam notasi seperti ini:
$jarak = 1.2E-5;
// E-5 artinya eksponen dari 10.
// Contoh di atas akan sama dengan 1.2 x 10-5. Kalau kita jabarkan akan menjadi 0.000012.
// Agar format float tidak tercetak dalam notasi E, kita bisa gunakan fungsi sprintf().
// Contoh:
$a= 10;
echo sprintf('%f', $a);
echo "<p>";
// batasi angka di belakang koma
echo sprintf('%.3f', $a);
echo "<p>";


// Tipe data boolean adalah tipe data yang hanya bernilai true dan false.

$isActive = false;
$menikah = true;

// Array adalah tipe data yang berisi sekumpulan data.
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];
// Kita akan membahas lebih dalam tentang array di: 7 Hal yang Harus Kamu Ketahui Tentang Array.

// Tipe data objek adalah tipe data abstrak yang berisi data dan method.
// $user = new User();
// Tipe data objek lebih sering disebut instance dari sebuah class. Pada contoh di atas User() adalah class yang di-instance di variabel $user.
// Setiap pembuatan instance harus didhului dengan kata kunci new.

// Tipe data NULL adalah tipe data yang menyatakan kosong.
$nama = NULL;
