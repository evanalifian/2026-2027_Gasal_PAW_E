<?php

//2.1
echo '2.1' . '<br>';
$fruits = array("Avocado", "Blueberry", "Cherry");

for ($i = 1; $i <= 5; $i++) {
    $fruits[] = "Buah Tambahan " . $i;
}

$arrlength = count($fruits);

echo "Panjang array saat ini: " . $arrlength;
echo "<br><br>";

for ($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}

echo "<br>";
echo "<br>";

//2.2
echo '2.2' . '<br>';
$vegies = ["Carrot", "Broccoli", "Spinach"];

for ($i = 0; $i < count($vegies); $i++) {
    echo $vegies[$i] . "<br>";
}

?>