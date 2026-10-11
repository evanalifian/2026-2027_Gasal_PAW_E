<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

$fruits[] = "Durian";
$fruits[] = "Grape";
$fruits[] = "Mango";
$fruits[] = "Orange";
$fruits[] = "Watermelon";

$indeks_tertinggi = count($fruits) - 1;

echo "Semua buah: ";
print_r($fruits);

echo "<br>";
echo "Indeks tertinggi: " . $indeks_tertinggi;
echo "<br>";
echo "Nilai indeks tertinggi: " . $fruits[$indeks_tertinggi];



// $fruits = array(
//     "Avocado", "Blueberry", "Cherry",
//     "Durian", "Grape", "Mango",
//     "Orange", "Watermelon"
// );

// unset($fruits[3]);

// echo "Array setelah data dihapus:<br>";
// print_r($fruits);

// echo "<br><br>";
// echo "Indeks tertinggi: " . max(array_keys($fruits));
// echo "<br>";
// echo "Nilai indeks tertinggi: " . $fruits[max(array_keys($fruits))];

