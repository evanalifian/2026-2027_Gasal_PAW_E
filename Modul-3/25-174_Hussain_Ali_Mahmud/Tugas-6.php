<?php
echo 'Array awal: ("A")<br>';
$arr1 = array("A");
array_push($arr1, "B");
echo "Hasil array_push: " . implode(" ", $arr1) . "<br><br>";

echo 'Array awal: ("A", "B") digabung dengan ("C")<br>';
$arr2a = array("A", "B");
$arr2b = array("C");
$merged = array_merge($arr2a, $arr2b);
echo "Hasil array_merge: " . implode(" ", $merged) . "<br><br>";

echo 'Array awal: ("x" => 1, "y" => 2)<br>';
$arr3 = array("x" => 1, "y" => 2);
echo "Hasil array_values: " . implode(" ", array_values($arr3)) . "<br><br>";

echo 'Mencari "B" pada array: ("A", "B", "C")<br>';
$arr4 = array("A", "B", "C");
echo "Hasil array_search: " . array_search("B", $arr4) . "<br><br>";

echo 'Array awal: (0, 1, false, 2, "", 3, "array")<br>';
$arr5 = array(0, 1, false, 2, "", 3, "array");
$filtered = array_filter($arr5);
echo "Hasil array_filter: " . implode(" ", $filtered) . "<br><br>";

echo 'Array awal: (3, 1, 2)<br>';
$arr6 = array(3, 1, 2);
$s1 = $arr6; sort($s1);
echo "Hasil sort: " . implode(" ", $s1) . "<br>";
$s2 = $arr6; rsort($s2);
echo "Hasil rsort: " . implode(" ", $s2) . "<br><br>";

echo 'Array awal: ("Peter"=>35, "Ben"=>37, "Joe"=>43)<br>';
$ages = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$a = $ages; asort($a);
echo "Hasil asort: ";
foreach($a as $k => $v) { echo "$k=> $v, "; }
echo "<br>";

$b = $ages; ksort($b);
echo "Hasil ksort: ";
foreach($b as $k => $v) { echo "$k=> $v, "; }
echo "<br>";

$c = $ages; arsort($c);
echo "Hasil arsort: ";
foreach($c as $k => $v) { echo "$k=> $v, "; }
echo "<br>";

$d = $ages; krsort($d);
echo "Hasil krsort: ";
foreach($d as $k => $v) { echo "$k=> $v, "; }
?>