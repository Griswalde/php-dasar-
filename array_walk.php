<?php
$siswa = [
    "satu" => "Andi",
    "dua" => "agung",
    "tiga" => "wijdan",
    "empat" => "budi"
];

function tampil($a, $b) {
    echo "Element ke $b berisi $a <br>";
}

array_walk($siswa, "tampil");
