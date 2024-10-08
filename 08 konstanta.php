<?php

// kita punya konstanta dengan nilai 5
const sebuahkonstanta1 = 5;

// lalu kita ubah menjadi 10
//const sebuahkonstanta1 = 10; <-- maka akan terjad error di sini

const sebuahkonstanta2 = 5; //kita rubah namanya agar berbeda


echo "<h1>". sebuahkonstanta1 . "<p></p>". sebuahkonstanta2."</h1>";

echo "<h2>";
// membuat konstanta dengan fungsi define()
define('DB_SERVER', 'localhost');
define('DB_USER', 'sultanbeatmber');
define('DB_PASS', 'R4Hasia');
define('DB_NAME', 'belajar');

print "<p>";
print "Nama server: " . DB_SERVER;
print "<p>";
print "Nama user: " . DB_USER;
// membuat konstanta dengan kata kunci const
const API_KEY = "1234";
print "<p>";
print "api key: " . API_KEY;

const SITE_NAME1 = "sultanbeatmber";
print "<p>";
print "Nama situs: " . SITE_NAME1;
print "<p>";
print "Nama situs API: " . API_KEY;

echo "</h1>";
echo "<h3>";
// file: belajar-konstanta.php

// membuat konstanta
define('VERSION', '1.0.0');

const SITE_NAME  = "sultanbeatmber";
const BASE_URL    = "https://www.sultanbeatmber.com";

// cetak nilai konstanta
echo "Site name: " . SITE_NAME . "<br/>";
echo "URL: " . BASE_URL . "<br/>";
echo "Version: " . VERSION . "<br/>";
echo "</h3>";
