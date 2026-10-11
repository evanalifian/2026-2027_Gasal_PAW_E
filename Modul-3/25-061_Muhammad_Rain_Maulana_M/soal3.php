<?php
// $height = array(
//     "Andy" => "176",
//     "Barry" => "165",
//     "Charlie" => "170"
// );

// $height["David"] = "180";
// $height["Edward"] = "172";
// $height["Felix"] = "168";
// $height["George"] = "175";
// $height["Henry"] = "178";

// $keys = array_keys($height);
// $indeks_terakhir = end($keys);

// echo "Nama pada indeks terakhir: " . $indeks_terakhir;
// echo "<br>";
// echo "Tinggi badan: " . $height[$indeks_terakhir] . " cm";

// unset($height["Henry"]);

// echo "<br><br>Setelah Henry dihapus:<br>";

// $keys = array_keys($height);
// $indeks_terakhir = end($keys);

// echo "Nama pada indeks terakhir: " . $indeks_terakhir;
// echo "<br>";
// echo "Tinggi badan: " . $height[$indeks_terakhir] . " cm";







$weight = array(
    "Andy" => 65,
    "Barry" => 70,
    "Charlie" => 60
);

$keys = array_keys($weight);
$nama_kedua = $keys[1];

echo "Nama: " . $nama_kedua;
echo "<br>";
echo "Berat badan: " . $weight[$nama_kedua] . " kg";

