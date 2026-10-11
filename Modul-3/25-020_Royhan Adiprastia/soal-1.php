
<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Mango");

echo "1.1 Sebelum penghapusan:<br>";

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

$lastIndex = max(array_keys($fruits));
echo "Nilai dengan indeks tertinggi: " . $fruits[$lastIndex];

$key = array_search("Fig", $fruits);

if ($key !== false) {
    unset($fruits[$key]);
}

echo "<br><br>1.2 Setelah penghapusan:<br>";

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

$lastIndex = max(array_keys($fruits));
echo "Nilai dengan indeks tertinggi: " . $fruits[$lastIndex];
?>