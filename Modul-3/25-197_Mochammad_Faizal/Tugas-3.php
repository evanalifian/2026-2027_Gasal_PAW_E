<?php

$height = array("Andy"=>"176","Barry"=>"165","Charlie"=>"170");
//echo "Andy is " . $height['Andy'] ." cm tall.";

$new_height = [ //nambah
    "David" => "180",
    "Ethan" => "172",
    "Frank" => "168",
    "George" => "175",
    "Harry" => "182"
];

$height += $new_height;

echo "height = ("; //nyetak satu
foreach ($height as $h => $hv) {
    echo "\"$h\" => \"$hv\", ";
} echo ")<br>";

$last_ind = [];
foreach ($height as $h => $hv) {
    $last_ind = $hv;
}
echo "Nilai dengan indeks terakhir: $last_ind";
echo "<br><br>";

unset($height["Barry"]);
echo "height = ("; //nyetak duwa
foreach ($height as $h => $hv) {
    echo "\"$h\" => \"$hv\", ";
} echo ")<br>";

$last_ind = [];
foreach ($height as $h => $hv) {
    $last_ind = $hv;
}
echo "Nilai dengan indeks terakhir setelah dihapus: $last_ind";

echo "<br><br>===========================================================================================<br>";
//3,2
$weight = [
    "Andy" => 70,
    "Barry" => 65,
    "Charlie" => 75
];

echo "weight = ("; //nyetak tiga
foreach ($weight as $w => $wv) {
    echo "\"$w\" => \"$wv\", ";
    $data_kedua = $wv;
} echo ")<br>";

$data_kedua = 1;
foreach ($weight as $w => $wv) {
    if ($data_kedua == 2) {
        echo "Data kedua: $wv";
    }
    $data_kedua++;
}


