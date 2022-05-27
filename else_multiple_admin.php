<?php
$user = "guest";

if($user =="admin"){
    echo "Selamat datang admin";
}
else if ($user == "user"){
    echo "Selamat datang User";
}
else if ($user == "guest"){
    echo "Selamat datang tamu";
}
else {
    echo "Maaf,saya tidak kenal anda";
}