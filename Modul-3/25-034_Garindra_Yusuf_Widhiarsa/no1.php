<?php
// 1.1
$fruits = array("Avocado", "Blueberry", "Cherry");

$fruits[] = "Durian";
$fruits[] = "Elderberry";
$fruits[] = "Fig";
$fruits[] = "Grape";
$fruits[] = "Honeydew";
echo 'fruits = (';
foreach ($fruits as $value) {
    echo "\"$value\", ";
};
echo ')';
echo '<br>';

$buah_tertinggi = max($fruits);
echo "Nilai dengan indeks tertinggi: $buah_tertinggi";
echo '<br>';

echo '<br>';

// 1.2
$buah_dihapus = $fruits[1];
unset($fruits[1]);
echo "Data $buah_dihapus dihapus";
echo '<br>';
echo 'fruits = (';
foreach ($fruits as $value) {
    echo "\"$value\", ";
};
echo ')';
echo '<br>';

$buah_tertinggi = max($fruits);
echo "Nilai dengan indeks tertinggi: $buah_tertinggi";
echo '<br>';


?>