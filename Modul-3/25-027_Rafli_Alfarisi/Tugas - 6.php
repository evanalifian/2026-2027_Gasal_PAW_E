
<?php

// 1. array_push()
$a = array("A");

echo "Array awal: (\"" . implode("\", \"", $a) . "\")<br>";

array_push($a, "B");

echo "Hasil array_push: " . implode(" ", $a) . "<br><br>";


// 2. array_merge()
$a = array("A", "B");
$b = array("C");

echo "Array awal: (\"" . implode("\", \"", $a) . "\") digabung dengan (\"" . implode("\", \"", $b) . "\")<br>";

$hasil = array_merge($a, $b);

echo "Hasil array_merge: " . implode(" ", $hasil) . "<br><br>";


// 3. array_values()
$a = array("x" => 1, "y" => 2);

echo "Array awal: (\"x\" => 1, \"y\" => 2)<br>";

$hasil = array_values($a);

echo "Hasil array_values: " . implode(" ", $hasil) . "<br><br>";


// 4. array_search()
$a = array("A", "B", "C");

echo "Mencari \"B\" pada array: (\"A\", \"B\", \"C\")<br>";

$hasil = array_search("B", $a);

echo "Hasil array_search: " . $hasil . "<br><br>";


// 5. array_filter()
$a = array(0, 1, false, 2, "", 3, "array");

echo "Array awal: (0, 1, false, 2, \"\", 3, \"array\")<br>";

$hasil = array_filter($a);

echo "Hasil array_filter: " . implode(" ", $hasil) . "<br><br>";


// 6. sort() dan rsort()
$a = array(3, 1, 2);

echo "Array awal: (3, 1, 2)<br>";

$b = $a;
sort($b);
echo "Hasil sort: " . implode(" ", $b) . "<br>";

$b = $a;
rsort($b);
echo "Hasil rsort: " . implode(" ", $b) . "<br><br>";


// 7. Fungsi sorting array asosiatif
$a = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

echo "Array awal: (\"Peter\"=>35, \"Ben\"=>37, \"Joe\"=>43)<br>";

// asort(): urut berdasarkan nilai, menaik
$b = $a;
asort($b);
echo "Hasil asort: ";
foreach ($b as $nama => $umur) {
    echo "$nama => $umur, ";
}
echo "<br>";

// ksort(): urut berdasarkan key, menaik
$b = $a;
ksort($b);
echo "Hasil ksort: ";
foreach ($b as $nama => $umur) {
    echo "$nama => $umur, ";
}
echo "<br>";

// arsort(): urut berdasarkan nilai, menurun
$b = $a;
arsort($b);
echo "Hasil arsort: ";
foreach ($b as $nama => $umur) {
    echo "$nama => $umur, ";
}
echo "<br>";

// krsort(): urut berdasarkan key, menurun
$b = $a;
krsort($b);
echo "Hasil krsort: ";
foreach ($b as $nama => $umur) {
    echo "$nama => $umur, ";
}
echo "<br>";

?>
