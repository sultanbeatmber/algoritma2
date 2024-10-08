<?php 


// Selain cara ini, kita juga bisa melakukannya seperti di bahasa C:

$a = "32";
$a = (int) $a; // ubah nilai a menjadi integer
$a = (float) $a; // ubah nilai a menjadi float
$a = (string) $a; // ubah nilai a menjadi string

$a = 3;
$b = "3 kusing";
$b = (int)$b;

$c = $b * $a;
echo "<p>";

echo "<h1>".$c;
