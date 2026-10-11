<?php
echo '6.1<br>';
// 1. array_push()
$buah = array("A");
echo 'Array awal: ("A")<br>';
array_push($buah, "B");
echo "Hasil array_push: ";
foreach ($buah as $nilai) {
    echo "$nilai ";
}
echo "<br><br>";


// 2. array_merge()
$huruf = array("A", "B");
$huruf_lain = array("C");
echo 'Array awal: ("A", "B") digabung dengan ("C")<br>';
echo "Hasil array_merge: ";
foreach (array_merge($huruf, $huruf_lain) as $nilai) {
    echo "$nilai ";
}
echo "<br><br>";


// 3. array_values()
$angka = array("x" => 1, "y" => 2);
echo 'Array awal: ("x" => 1, "y" => 2)<br>';
echo "Hasil array_values: ";
foreach (array_values($angka) as $nilai) {
    echo "$nilai ";
}
echo "<br><br>";


// 4. array_search()
$huruf = array("A", "B", "C");
echo 'Mencari "B" pada array: ("A", "B", "C")<br>';
echo "Hasil array_search: ".array_search("B", $huruf)."<br><br>";


// 5. array_filter()
$data = array(0, 1, false, 2, "", 3, "array");
echo 'Array awal: (0, 1, false, 2, "", 3, "array")<br>';
echo "Hasil array_filter: ";
foreach (array_filter($data) as $nilai) {
    echo "$nilai ";
}
echo "<br><br>";


// 6. sort() dan rsort()
$angka = array(3, 1, 2);
echo "Array awal: (3, 1, 2)<br>";
sort($angka);
echo "Hasil sort: ";
foreach ($angka as $value) {
    echo "$value ";
}
echo "<br>";
rsort($angka);
echo "Hasil rsort: ";
foreach ($angka as $value) {
    echo "$value ";
}
echo "<br><br>";


// 7. Sorting associative array
$umur = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo 'Array awal: ("Peter" => 35, "Ben" => 37, "Joe" => 43)<br>';

// sort()
$hasil = $umur;
sort($hasil);
echo "Hasil sort: ";
foreach ($hasil as $key => $value) {
    echo "$key => $value, ";
}
echo "<br>";

// ksort()
$hasil = $umur;
ksort($hasil);
echo "Hasil ksort: ";
foreach ($hasil as $key => $value) {
    echo "$key => $value, ";
}
echo "<br>";

// asort()
$hasil = $umur;
asort($hasil);
echo "Hasil asort: ";
foreach ($hasil as $key => $value) {
    echo "$key => $value, ";
}
echo "<br>";

// krsort()
$hasil = $umur;
krsort($hasil);
echo "Hasil krsort: ";
foreach ($hasil as $key => $value) {
    echo "$key => $value, ";
}
echo "<br>";



?>