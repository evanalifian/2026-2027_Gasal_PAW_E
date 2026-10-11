<?php
$fruits = ["Avocado","Blueberry","Cherry"];

for ($x=1 ; $x<=5; $x++){
    $fruits[] = "Buah Tambahan $x";
}
$arrlength = count($fruits);
echo "Panjang array saat ini: $arrlength <br><br>";

for ($i=0; $i<$arrlength; $i++){
    echo $fruits[$i];
    echo "<br>";
}
?>
