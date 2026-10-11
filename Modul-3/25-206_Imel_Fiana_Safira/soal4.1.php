<?php
$height = [
    "Andy"=>"176",
    "Barry"=>"165",
    "Charlie"=>"170"
];
$height["David"] = "180";
$height["Ethan"]= "172";
$height["Frank"]= "168";
$height["George"] = "175";
$height["Harry"]= "182";

echo "<pre>";
print_r($height);
echo "</pre>";
echo "<br>";

foreach($height as $nama => $tinggi){
    echo "$nama is $tinggi cm tall<br>";
}
?>
