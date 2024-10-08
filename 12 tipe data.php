<?php

$a = 10;
$b = 10;
$c = $a + $b;
echo $c;


// tipe data char (karakter)
$jenis_kelamin = 'L';

// tipe data string (teks)
$nama_lengkap = "Ahmadi";

// tipe data integer
$umur = 20;

// tipe data float
$berat = 48.3;

// tipe data float
$tinggi = 182.2;

// tipe data boolean
$menikah1 = false;
$menikah2 = true;

echo "Nama: $nama_lengkap<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
echo "Umur: $umur tahun<br>";
echo "berat badan: $berat kg<br>";
echo "tinggi badan: $tinggi cm<br>";
echo "menikah: $menikah1<br>";
echo "menikah: $menikah2<br>";
echo "<p>";

if ($menikah1=true) {
    echo "menikah lah sebelum terlambat";
} else {
    echo "jangan menikah dulu sebelum sukses";
}
echo "<p>";

if ($menikah2=false) {
    echo "menikah lah sebelum terlambat";
} else {
    echo "jangan menikah dulu sebelum sukses";
}
