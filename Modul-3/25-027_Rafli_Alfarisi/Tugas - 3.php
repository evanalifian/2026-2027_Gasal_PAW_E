<?php
$height = array("andy" => "176", "barry" => "165", "charlie" => "170");

// menambahkan lima data baru
$height["david"] = "180";
$height["ethan"] = "172";
$height["frank"] = "168";
$height["george"] = "175";
$height["harry"] = "182";

// menampilkan array
echo "height = ";
print_r($height);
echo "<br> nilai dengan indeks terakhir: " . end($height);

// menghapus data barry
unset($height["barry"]);

echo "<br> height setelah dihapus = ";
print_r($height);
echo "<br> nilai dengan indeks terakhir: " . end($height);

echo "<br>";

// membuat array baru $wheigt dan menampilkan data kedua
$weight = array("Andy" => "70", "Barry" => "65", "Charlie" => "75");

echo "weight = ";
print_r($weight);

echo "<br>Data kedua: " . $weight["Barry"];
?>