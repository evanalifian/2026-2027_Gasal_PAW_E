<?php
$fruits = array("Avocado","Blueberry","Cherry");
$arrlength = count($fruits);

for($x = 1; $x < ($arrlength + 3); $x++) {
    $fruits[] = "Buah Tambahan $x";
}

$arrlength = count($fruits);
echo "Panjang array saat ini: $arrlength<br><br>";


for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}

//2.2 
echo "<br> <br>";
$vegies = ["Carrot", "Broccoli", "Spinach"];
for($x = 0; $x < ($arrlength - 5); $x++) {
    echo $vegies[$x];
    echo "<br>";
}