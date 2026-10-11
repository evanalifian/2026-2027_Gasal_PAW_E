<?php
$height = [
    "Andy"=>"176",
    "Barry"=>"165",
    "Charlie"=>"170",
    ];

$height["David"] = "180";
$height["Ethan"]= "172";
$height["Frank"]= "168";
$height["George"] = "175";
$height["Harry"]= "182";

echo "<pre>";
print_r($height);
echo "</pre>";
echo "<br>";

$elemenTerakhir = array_key_last($height);
echo "Nilai dengan indeks terakhir: ".$height[$elemenTerakhir]."<br>";

unset($height["Barry"]);
echo "<pre>";
print_r($height);
echo "<br>";
echo "</pre>";

$elemenTerakhir1 = array_key_last($height);
echo "Nilai dengan indeks terakhir: ".$height[$elemenTerakhir1]."<br>";
?>
