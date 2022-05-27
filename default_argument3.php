<?php
function salam($waktu = "malam", $nama = "anton"){
    echo "<p>selamat $waktu, $nama </p>";
}

salam();
salam("pagi");
salam("Datang", "pak president!");
