<?php
function coba(){
    static $a = 0;
    $a = $a+1;
    return "ini adalah pemanggilan ke -$a fungsi coba() <br /> ";
}

echo coba();
echo coba();
echo coba();
echo coba();