<?php


// soal awal
$height = array("Andy"=>"176","Barry"=>"165","Charlie"=>"170");
echo "Andy is " . $height['Andy'] ." cm tall.";


echo "<br><br>";
echo "3.1<br>";
$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";
echo 'height = (';
foreach ($height as $key => $value) {
    echo "\"$key\"=>\"$value\"";
    if ($key !== array_key_last($height)) {
        echo ", ";
    } else {
        echo "";
    }
}
echo ')';
echo "<br>";
echo "Nilai dengan indeks terakhir: " . array_key_last($height) . " = " . $height[array_key_last($height)];
echo "<br><br>";


unset($height["Barry"]);
echo 'height = (';
foreach ($height as $key => $value) {
    echo "\"$key\"=>\"$value\"";
    if ($key !== array_key_last($height)) {
        echo ", ";
    } else {
        echo "";
    }
}
echo ')';
echo "<br>";
echo "Nilai dengan indeks terakhir: " . array_key_last($height) . " = " . $height[array_key_last($height)];


echo "<br><br>";
echo "3.2<br>";
$weight = array("Andy"=>"70","Barry"=>"65","Charlie"=>"75");
echo 'weight = (';
foreach ($weight as $key => $value) {
    echo "\"$key\"=>\"$value\"";
    if ($key !== array_key_last($weight)) {
        echo ", ";
    } else {
        echo "";
    }
}
echo ')';
echo "<br>";
echo "Data kedua: " . $weight["Barry"];






?>