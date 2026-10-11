<?php
//1.1
$fruits = array("Avocado","Blueberry","Cherry");

$buah = ["Durian", "Elderberry", "Fig", "Grape", "Honeydew"];
$new_fruits = array_merge($fruits, $buah);

echo "fruits = (";
foreach ($new_fruits as $n) {
    echo "\"$n\", ";
} echo ")";

echo "<br>Nilai dengan indeks tertinggi: " . $new_fruits[count($new_fruits) - 1];

echo "<br>";
echo "<br> ===========================================================================================";
echo "<br>";
//1.2
echo "Data $new_fruits[1] dihapus <br>";
unset($new_fruits[1]);

echo "fruits = (";
foreach ($new_fruits as $n) {
    echo "\"$n\", ";
} echo ")";

echo "<br>Nilai dengan indeks tertinggi: " . $new_fruits[count($new_fruits) - 1];