<?php
//4.1
echo "Jawaban 4.1" . "<br>";
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

echo "height = ";
print_r($height);

echo "<br><br>";

foreach ($height as $nama => $tinggi) {
    echo $nama . " is " . $tinggi . " cm tall.<br>";
}

echo '<br>';

//4.2
echo "Jawaban 4.2" . "<br>";
$weight = array("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75");

echo 'weight = ("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75")';
echo "<br><br>";

$nama = array_keys($weight);

for ($i = 0; $i < count($weight); $i++) {
    echo $nama[$i] . " is " . $weight[$nama[$i]] . " kg.<br>";
}

?>
