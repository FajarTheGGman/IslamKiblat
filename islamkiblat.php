<?php
include "banner.php";
echo "Masukan Nama kota : ";

$kota = trim(fgets(STDIN));

$asw = file_get_contents("https://time.siswadi.com/qibla/$kota");

$asw1 = explode("<br>",$asw);
foreach ($asw1 as $key){
$js = json_decode($key,true);
print_r($js);
}
?>

//Lelaki yang mencuri dan wanita yang mencuri,potonglah tangan
//keduanya (sebagai) pembalasan bagi apa yang mereka kerjakan dan
//sebagai siksaan dari Allah.
//Dan Allah Maha Perkasa lagi Maha Bijaksana.
//Maka barangsiapa bertaubat (di antara pencuri-pencuri itu)
//sesudah melakukan kejahatan itu dan memperbaiki diri,
//maka sesungguhnya Allah menerima taubatnya.
//Sesungguhnya Allah Maha Pengampun lagi Maha Penyayang.

//(QS. Al-Maidah: 38-39)