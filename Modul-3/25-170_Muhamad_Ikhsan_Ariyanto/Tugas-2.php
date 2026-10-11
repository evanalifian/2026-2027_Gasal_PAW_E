<?php
    $fruits = array("Avocado","Blueberry","Cherry");

    for($i = 1; $i <= 5; $i++){
        $fruits[] = "Buah tambahan {$i}";
    }

    $arrlength = count($fruits);
    echo("Panjang array saat ini: " . $arrlength . "<br><br>");
    
    for($x = 0; $x < $arrlength; $x++) {
        echo $fruits[$x];
        echo "<br>";
    }
    echo("<br><br>");

    $vegies = array("Carrot", "Brocooli", "Spinach");
    for($i = 0; $i < count($vegies); $i++) {
        echo $vegies[$i];
        echo "<br>";
    }
?>
