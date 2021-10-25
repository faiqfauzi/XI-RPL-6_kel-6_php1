<?php
$value = 'achmatim';
$value2 = 'Achmad Solichin';

setcookie("username", $value);
setcookie("namamlengkap", $value2, time()+3600); /* expire in 1 hour */

echo "<h1>Ini halaman pengesetan cookies</h1>";

echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>