<?php
$a = 'Andi';
$b = 'madun';

$salam = function(){
    global $a;
    global $b;
    echo "Selamat Siang $a <br>";
    $a = 'Rissa';
    echo "Selamat Siang $a <br>";
    echo "Selamat siang $b <br>";
    $b = "udin";
    echo "Selamat siang kontol $b<br>";

};

$salam();
echo "Selamat Siang $a<br>";
echo "Selamat pagi $b";