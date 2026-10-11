<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// Menambahkan lima data baru menggunakan for
for ($i = 1; $i <= 5; $i++){
	$fruits[] = "buah tambahan" . $i;
}

// Menampilkan panjang array
echo "panjang array saat ini: " . count($fruits) . "<br><br>";

// Menampilkan seluruh isi array
foreach ($fruits as $buah) {
	echo $buah . "<br>";
}

// Membuat array baru bernama $vegies
$vegies = array("Carrot", "Broccoli", "Spinach");

for ($i = 0; $i < count($vegies); $i++){
	echo $vegies[$i] . "<br>";
}


?>

