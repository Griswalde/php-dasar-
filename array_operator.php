<?php
$kelasA = ["Andri","Joko","Sukma","Rina","Sari"];
$kelasB = ["Alex", "Rina", "Rico"];

$semua = $kelasA + $kelasB;
print_r($semua); echo "<br>";
 // array ([0])

 var_dump($kelasA == $kelasB); echo "<br>";
 var_dump($kelasA === $kelasB); echo "<br>";
 var_dump($kelasA != $kelasB); echo "<br>";
 var_dump($kelasA <> $kelasB); echo "<br>";
 var_dump($kelasA !== $kelasB);