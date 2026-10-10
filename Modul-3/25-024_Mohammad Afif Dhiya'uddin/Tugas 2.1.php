<?php
    $fruits = array("Avocado", "Blueberry", "Cherry");

    for ($i = 1; $i <= 5; $i++) {
        $fruits[] = "Buah Tambahan " . $i;
    }

    echo "Panjang array saat ini: " . count($fruits) . "<br><br>";

    $arrlength = count($fruits);

    for ($j = 0; $j < $arrlength; $j++) {
        echo $fruits[$j] . "<br>";
    }
?>
