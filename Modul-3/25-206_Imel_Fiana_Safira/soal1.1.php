<?php
$fruits = ["Avocado","Blueberry","Cherry"];
$fruits[] = "Durian";
$fruits[] = "Elderberry";
$fruits[] = "Fig";
$fruits[] = "Grape";
$fruits[] = "Honeydew";

echo "<pre>";
print_r($fruits);
echo "</pre>";

$indeksTertinggi = count($fruits) - 1;
echo "Nilai dengan indeks tertinggi : $fruits[$indeksTertinggi]";
?>
