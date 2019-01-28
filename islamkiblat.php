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
