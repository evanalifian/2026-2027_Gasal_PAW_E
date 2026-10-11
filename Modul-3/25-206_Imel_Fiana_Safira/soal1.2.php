<?php
$fruits = ["Avocado","Blueberry","Cherry", "Durian", "Elderberry", "Fig", "Grape", "Honeydew"];

$hapusElemen = array_splice($fruits,1,1);
echo "Data Blueberry dihapus.";
echo "<pre>";
print_r($fruits);
echo "</pre>";

$indeksTertinggi = count($fruits) - 1;
echo "Nilai dengan indeks tertinggi : $fruits[$indeksTertinggi]";
?>
