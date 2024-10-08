<?php
// misalkan kita punya bilangan dengan notasi E seperti ini
$harga = 100000;

// jika kita cetak dengan echo:
echo "<p></p>Harganya adalah Rp $harga";

// jika kita cetak dengan print:
print "<p></p>Harganya adalah Rp $harga";

// jika kita cetak dengan printf
printf("<p>Harganya adalah Rp %.1f", $harga);

// jika kita cetak dengan printf
printf("<p>Harganya adalah Rp %.2f", $harga);

// jika kita cetak dengan printf
printf("<p>Harganya adalah Rp %.3f", $harga);
