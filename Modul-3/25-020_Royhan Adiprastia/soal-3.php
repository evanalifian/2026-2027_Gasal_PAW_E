
<?php
$height = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

$height["David"] = "180";
$height["Edward"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Henry"] = "178";

echo "1. Data tinggi badan setelah penambahan:<br>";

foreach ($height as $name => $value) {
    echo $name . " : " . $value . " cm<br>";
}

echo "Nilai terakhir: " . end($height) . " cm";

unset($height["Frank"]);

echo "<br><br>Data setelah penghapusan:<br>";

foreach ($height as $name => $value) {
    echo $name . " : " . $value . " cm<br>";
}

echo "Nilai terakhir: " . end($height) . " cm";

$weight = array(
    "Andy" => "65",
    "Barry" => "70",
    "Charlie" => "60"
);

$values = array_values($weight);

echo "<br><br>2. Data kedua berat badan: " . $values[1] . " kg";
?>