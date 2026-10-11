<?php

// soal awal
$fruits = array("Avocado","Blueberry","Cherry");
$arrlength = count($fruits);

for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}
echo "<br>";


echo "2.1<br>";
for($x = 1; $x <= 5; $x++) {
    $fruits[] = "Buah Tambahan $x";
}

echo "Panjang array saat ini: ".count($fruits)."<br><br>";
for($x = 0; $x < count($fruits); $x++) {
    echo $fruits[$x];
    echo "<br>";
}

echo "<br>";
echo "2.2<br>";
$vegies = array("Carrot","Broccoli","Spinach");
for($x = 0; $x < count($vegies); $x++) {
    echo $vegies[$x];
    echo "<br>";
};
echo 'Penjelasan: Aku cukup memodifikasi skrip yang sudah ada, karena di skrip itu sudah ada contoh deklarasi array dan perulangan for untuk menampilkan seluruh data array. Jadi, aku hanya perlu membuat array baru $vegies yang isinya tiga data sayuran, yaitu "Carrot", "Broccoli", dan "Spinach". Setelah itu, aku menggunakan perulangan for untuk mennampilkan isi array berdasarkan indeksnya dan menampilkan seluruh data sayuran.';

?>