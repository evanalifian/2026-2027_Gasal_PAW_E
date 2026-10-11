<?php 

//3.1
echo "3.1" . "<br>";
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170", "David"=>"180", "Ethan"=>"172", "Frank"=>"168", "George"=>"175", "Harry"=>"182");

print_r($height);
print "<br>Nilai dengan indeks terakhir: ";
print_r(end($height));

print "<br><br>";

unset($height["Barry"]);

print_r($height);
print "<br>Nilai dengan indeks terakhir setelah dihapus: ";
print_r(end($height));

echo "<br>"."<br>";

//3,2
echo "3.2" . "<br>";
$weight = [
    "Andy" => "70",
    "Barry" => "65",
    "Charlie" => "75"
];

echo "weight = ";
print_r($weight);

echo "<br>Data kedua: " . $weight["Barry"];


?>