<?php
$height = array("Andy"=>"176","Barry"=>"165","Charlie"=>"170");
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
} echo ")<br><br>";

foreach ($height as $h => $hv) {
    echo "$h is $hv cm tall <br>";
}

echo "<br><br>===========================================================================================<br>";
//4.2
$weight = [
    "Andy" => 70,
    "Barry" => 65,
    "Charlie" => 75
];

echo "weight = ("; //nyetak duwa
foreach ($weight as $w => $wv) {
    echo "\"$w\" => \"$wv\", ";
    $data_kedua = $wv;
} echo ")<br>";

foreach ($weight as $w => $wv) {
    echo "$w is $wv kg <br>";
}