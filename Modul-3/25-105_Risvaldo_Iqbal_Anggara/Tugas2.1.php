<?php
$fruits = array("Avocado","Blueberry","Cherry");

$arrlength = count($fruits);

for ($i = 0; $i < 5; $i++){
	$fruits[] = 'Buah Tambahan '.($i+1);
	}

$arrlength = count($fruits);
echo 'Panjang Array saat ini : '. $arrlength. '<br>';
echo '<br>';

for($x = 0; $x < $arrlength; $x++) {
	echo $fruits[$x];
	echo "<br>";
	} 

//Tidak Perlu diubah Karena code ini hanya digunakan untuk menampilkan array. Menurut saya kenapa tidak perlu diubah, karena kita hanya perlu menambah perulangan baru untuk menambahkan data baru. Dan pada perulangan ini hanya untuk menampilkan array kebawah saja.
?>