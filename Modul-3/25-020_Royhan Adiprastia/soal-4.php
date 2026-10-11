
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

echo "1. Daftar tinggi badan:<br>";

foreach ($height as $name => $value) {
    echo $name . " memiliki tinggi " . $value . " cm<br>";
}

$weight = array(
    "Andy" => "65",
    "Barry" => "70",
    "Charlie" => "60"
);

$names = array_keys($weight);
$arrlength = count($names);

echo "<br>2. Daftar berat badan:<br>";

for ($i = 0; $i < $arrlength; $i++) {
    echo $names[$i] . " memiliki berat "
        . $weight[$names[$i]] . " kg<br>";
}
?>
