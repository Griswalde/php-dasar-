<?php
$a = 99;
$b = "Belajar PHP";
$c = & $b;

echo "$a , $b, $c"; // 99 , belajar PHP, belajar PHP
echo "<br>";

$c = "Operator assginment";
echo "$a , $b , $c"; // 99, belejar PHP, belajar PHP
echo "<br>";

$c = "Operator Assignment";
echo "$a, $b, $c"; // 99 operator assignment, operator assignment