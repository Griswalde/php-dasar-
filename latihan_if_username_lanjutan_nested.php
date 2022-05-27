<?php
$username = "ujang";
$password = "qwerty";

if($username=="admin"){
    if($password=="qwerty"){
        echo "Nama dan passwrod sesuai,hak akses diberikan...";
    }
    else {
        echo "Nama sesuai,password tidak sesuai";
    }
}
else if ($password=="qwerty"){
    echo "Nama tidak sesuai,password sesuai";
}
else {
    echo "Nama dan password tidak sesuai";
}