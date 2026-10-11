<?php
$height = array ("Andy" => "176", "Barry" => "165", "Charlie" => "170");

// Menambahkan lima data baru
$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

// Menampilkan seluruh data array
echo "height = ";
print_r($height);
echo "<br><br>";

// Menampilkan data menggunakan foreach
foreach ($height as $nama => $tinggi) {
    echo "$nama is $tinggi cm tall.<br>";
}

echo "<br>"

// membuat array $wheight dan menampilkan seluruh data mengukan for
$weight = array("Andy" => "70", "Barry" => "65", "Charlie" => "75");

echo 'weight = ("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75")<br>';

// Mengambil key dan value array
$nama = array_keys($weight);
$berat = array_values($weight);

// Menampilkan data menggunakan for
for ($i = 0; $i < count($weight); $i++) {
    echo $nama[$i] . " is " . $berat[$i] . " kg.<br>";
}

?>