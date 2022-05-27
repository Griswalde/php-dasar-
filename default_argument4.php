<?php
function salam($waktu, $nama= "Anton"){
    echo "<p>Selamat $waktu, $nama  </p>";
}

salam("sore");
salam("pagi");
salam("Datang", "Randy");
salam("sore", "Agung");