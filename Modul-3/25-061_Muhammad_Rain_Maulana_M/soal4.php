<?php
// $height = array(
//     "Andy" => 176,
//     "Barry" => 165,
//     "Charlie" => 170
// );

// $height["David"] = 180;
// $height["Edward"] = 172;
// $height["Felix"] = 168;
// $height["George"] = 175;
// $height["Henry"] = 178;

// foreach ($height as $nama => $tinggi) {
//     echo $nama . " memiliki tinggi " . $tinggi . " cm";
//     echo "<br>";
// }





$weight = array(
    "Andy" => 65,
    "Barry" => 70,
    "Charlie" => 60
);

$nama = array_keys($weight);
$arrlength = count($weight);

for ($i = 0; $i < $arrlength; $i++) {
    echo $nama[$i] . " memiliki berat ";
    echo $weight[$nama[$i]] . " kg";
    echo "<br>";
}
