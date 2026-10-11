<?php

//1.1
echo "Jawaban 1.1" . "<br>";
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Honeydew");

echo 'fruits = ( "'. implode('", "', $fruits). '" )<br>';
echo 'Nilai dengan indeks tertinggi: '. $fruits[count($fruits)-1];

echo "<br>";
echo "<br>";

//1.2
echo "Jawaban 1.2" . "<br>";
$fruits = array("Avocado", "Blueberry", "Cherry", "Durian", "Elderberry", "Fig", "Grape", "Honeydew");

unset($fruits[1]);

$fruits = array_values($fruits);

echo 'Data Blueberry dihapus.<br>';
echo 'fruits = ( "'. implode('", "', $fruits). '" )<br>';
echo 'Nilai dengan indeks tertinggi: '. end($fruits);

?>