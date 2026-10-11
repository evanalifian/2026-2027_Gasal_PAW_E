<?php 
$fruits = array("Avocado","Blueberry","Cherry"); 
$fruitsBaru = array("Durian", "Coconut", "Manggo", "Banana", "DurianBelanda");


for($x = 0; $x < count($fruitsBaru); $x++) { 
    array_push($fruits, $fruitsBaru[$x]);
}

$arrlength = count($fruits);

echo "Panjang array saat ini: " . $arrlength . "<br><br>";
for($x = 0; $x < $arrlength; $x++) { 
    echo $fruits[$x]; 
    echo "<br>"; 
}

echo "<br>";
$vegies = array("Carrot", "Broccoli", "tomato");
for($x = 0; $x < count($vegies); $x++) { 
    echo $vegies[$x]; 
    echo "<br>"; 
}

?>