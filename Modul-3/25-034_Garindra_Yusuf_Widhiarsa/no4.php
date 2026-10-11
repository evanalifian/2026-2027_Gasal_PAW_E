<?php
echo "<br><br>";
echo "4.1<br>";
$height = array("Andy"=>"176","Barry"=>"165","Charlie"=>"170");
$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";
echo 'height = (';
foreach ($height as $key => $value) {
    echo "\"$key\"=>\"$value\"";
    if ($key !== array_key_last($height)) {
        echo ", ";
    } else {
        echo ")";
    }
}
echo "<br><br>";
foreach ($height as $key => $value) {
    echo "$key is $value cm tall.<br>";
}

echo "<br><br>";
echo "4.2<br>";
$weight = array("Andy"=>"70","Barry"=>"65","Charlie"=>"75");
echo 'weight = (';
foreach ($weight as $key => $value) {
    echo "\"$key\"=>\"$value\"";
    if ($key !== array_key_last($weight)) {
        echo ", ";
    } else {
        echo ")";
    }
}
echo "<br><br>";
for($x = 0; $x < count($weight); $x++) {
    echo array_keys($weight)[$x] . " is " . $weight[array_keys($weight)[$x]] . " kg.<br>";
};




?>