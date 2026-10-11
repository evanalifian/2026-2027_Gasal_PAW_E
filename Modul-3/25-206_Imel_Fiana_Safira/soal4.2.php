<?php
$weight = [
    "Andy"=>"70",
    "Barry"=>"65",
    "Charlie"=>"75"
];

echo "<pre>";
print_r($weight);
echo "</pre>";
echo "<br>";

foreach($weight as $nama => $berat){
    echo "$nama is $berat kg.<br>";
}
?>
