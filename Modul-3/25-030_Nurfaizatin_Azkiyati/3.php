<?php
echo "3.1 <br>";
$height = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170",
    "David" => "180",
    "Ethan" => "172",
    "Frank" => "168",
    "George" => "175",
    "Harry" => "182"
);
$weight=array(
    "Andy" => "70",
    "Barry" => "65",
    "Charlie" => "75"
);

$data = [];
foreach ($height as $key => $value) {
    $data[] = '"' . $key . '"=>"' . $value . '"';
}

echo 'height = (' . implode(', ', $data) . ')<br>';
echo 'Nilai dengan indeks terakhir: ' . end($height) . '<br><br>';

unset($height["Barry"]);

$data = [];
foreach ($height as $key => $value) {
    $data[] = '"' . $key . '"=>"' . $value . '"';
}

echo 'height = (' . implode(', ', $data) . ')<br>';
echo 'Nilai dengan indeks terakhir setelah dihapus: ' . end($height) . "<br><br>";


//3.2
echo "3.2 <br>";
$data = [];
foreach ($weight as $key => $value) {
    $data[] = '"' . $key . '"=>"' . $value . '"';
}
echo 'weight = (' . implode(', ', $data) . ')<br>';
echo 'Data Kedua: ' . $weight["Barry"];
?>
