
<?php

// 1. array_push()
$array = array("A");

echo "Array awal: ('A')<br>";

array_push($array, "B");

echo "Hasil array_push: ";
echo implode(" ", $array);
echo "<br><br>";


// 2. array_merge()
$array1 = array("A", "B");
$array2 = array("C");

echo "Array awal: ('A', 'B') digabung dengan ('C')<br>";

$hasil = array_merge($array1, $array2);

echo "Hasil array_merge: ";
echo implode(" ", $hasil);
echo "<br><br>";


// 3. array_values()
$array = array("x" => 1, "y" => 2);

echo "Array awal: ('x' => 1, 'y' => 2)<br>";

$hasil = array_values($array);

echo "Hasil array_values: ";
echo implode(" ", $hasil);
echo "<br><br>";


// 4. array_search()
$array = array("A", "B", "C");

echo "Mencari 'B' pada array: ('A', 'B', 'C')<br>";

$hasil = array_search("B", $array);

echo "Hasil array_search: " . $hasil;
echo "<br><br>";


// 5. array_filter()
$array = array(0, 1, 2, 3, 4, 5, 6);

echo "Array awal: (0, 1, 2, 3, 'array')<br>";

$hasil = array_filter($array, function($nilai) {
    return $nilai % 2 == 0;
});

echo "Hasil array_filter: ";
echo implode(" ", $hasil);
echo "<br><br>";


// 6. sort()
$array = array(3, 1, 2);

echo "Array awal: (3, 1, 2)<br>";

sort($array);

echo "Hasil sort: ";
echo implode(" ", $array);
echo "<br><br>";


// 7. rsort()
$array = array(3, 1, 2);

rsort($array);

echo "Hasil rsort: ";
echo implode(" ", $array);
echo "<br><br>";


// 8. asort()
$array = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

asort($array);

echo "Hasil asort: ";
foreach ($array as $nama => $umur) {
    echo "$nama => $umur, ";
}
echo "<br><br>";


// 9. arsort()
arsort($array);

echo "Hasil arsort: ";
foreach ($array as $nama => $umur) {
    echo "$nama => $umur, ";
}
echo "<br><br>";


// 10. ksort()
ksort($array);

echo "Hasil ksort: ";
foreach ($array as $nama => $umur) {
    echo "$nama => $umur, ";
}
echo "<br><br>";


// 11. krsort()
krsort($array);

echo "Hasil krsort: ";
foreach ($array as $nama => $umur) {
    echo "$nama => $umur, ";
}

?>
