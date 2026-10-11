<?php
$height = array("Andy"=>"176","Barry"=>"165","Charlie"=>"170");

$height["Ethan"] = "180";
$height["Ada"] = "170";
$height["Lion"] = "181";
$height["Jill"] = "176";
$height["Criss"] = "182";

for($i = 0; $i < count($height); $i++) {
    $keys = array_keys($height);
    $nama = $keys[$i];
    echo $nama . " is " . $height[$nama] . " cm tall.<br>";
}

echo "<br>";

$weight = array("Andy" => "70", "Barry" => "65", "Charlie" => "75");
echo "weight = "; print_r($weight);
echo "<br><br>";


for($i = 0; $i < count($weight); $i++) {
    $keys = array_keys($weight);
    $nama = $keys[$i];
    echo $nama . " is " . $weight[$nama] . " kg.<br>";
}

?>