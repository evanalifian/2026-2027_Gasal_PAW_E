
<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
$newFruits = array("Durian", "Elderberry", "Fig", "Grape", "Mango");

for ($i = 0; $i < count($newFruits); $i++) {
    $fruits[] = $newFruits[$i];
}

$arrlength = count($fruits);

echo "2.1 Daftar buah<br>";
echo "Panjang array: " . $arrlength . "<br>";

for ($i = 0; $i < $arrlength; $i++) {
    echo $fruits[$i] . "<br>";
}

$vegies = array("Carrot", "Broccoli", "Spinach");
$vegiesLength = count($vegies);

echo "<br>2.2 Daftar sayuran<br>";
echo "Panjang array: " . $vegiesLength . "<br>";

for ($i = 0; $i < $vegiesLength; $i++) {
    echo $vegies[$i] . "<br>";
}
?>