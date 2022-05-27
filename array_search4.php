<?php
$siswa = array("andi","gina","joko","santi");
$key = array_search("andi",$siswa);

if ($key!==false) {
    echo "siswa ada di index ke $key";
}
else {
    echo "siswa tidak ditemukan";
}