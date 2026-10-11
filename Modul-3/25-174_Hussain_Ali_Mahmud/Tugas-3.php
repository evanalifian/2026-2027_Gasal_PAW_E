<?php 

$height = array("Andy"=>"176","Barry"=>"165","Charlie"=>"170"); 

$height["Ethan"] = "180";
$height["Ada"] = "170";
$height["Lion"] = "181";
$height["Jill"] = "176";
$height["Criss"] = "182";

echo "height = "; print_r($height);
echo "<br>Nilai dengan indeks terakhir: " . end($height) . "<br><br>";

unset ($height["Barry"]);

echo "height = "; print_r($height);
echo "<br>Nilai dengan indeks terakhir setelah di hapus: " . end($height) . "<br><br>";

$weight = array("Andy"=>"70","Barry"=>"60","Charlie"=>"65");
echo "weight = "; print_r($weight);
echo "<br>Data kedua: " . $weight["Barry"];

?>