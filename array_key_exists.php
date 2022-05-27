<?php
$nilai = array("anton" =>82, "rudy" => 91,"rini" => 92);

$cek = array_key_exists("rudy",$nilai);
var_dump($cek);

$cek = array_key_exists("joko",$nilai);
var_dump($cek);