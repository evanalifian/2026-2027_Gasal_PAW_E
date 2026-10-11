<?php

$fruits = array("Avocado","Blueberry","Cherry");

array_push ($fruits, "Durian", "Elderberry", "Manggo", "Banana", "Honeydew");

echo "fruits = (";
foreach ($fruits as $f) {
    echo '"' . $f . '", ';
}
echo ")<br>";
echo "Nilai dengan indeks tertinggi: " . end($fruits) . "<br><br>";

echo "Data " . $fruits[2] . " dihapus<br>";
unset($fruits[2]);
echo "fruits = (";
foreach ($fruits as $f) {
    echo '"' . $f . '", ';
}
echo ")<br>";
echo "Nilai dengan indeks tertinggi: " . end($fruits);

?>