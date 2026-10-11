<?php
// array_push
$arr1 = ["A"];
array_push($arr1, "B");
echo "Array awal: (" . $arr1[0] . ")<br>";
echo "Hasil array_push: " . $arr1[0] . " " . $arr1[1] . "<br><br>";

// array_merge
$arr2 = ["A", "B"];
$arr3 = ["C"];
$merged = array_merge($arr2, $arr3);
echo "Array awal: (" . implode(" ", $arr2) . ") digabung dengan (" . implode(" ", $arr3) . ")<br>";
echo "Hasil array_merge: " . implode(" ", $merged) . "<br><br>";

// array_values
$arr4 = ["x" => 1, "y" => 2];
echo "Array awal: (x=>1, y=>2)<br>";
$vals = array_values($arr4);
echo "Hasil array_values: " . implode(" ", $vals) . "<br><br>";

// array_search
$arr5 = ["A", "B", "C"];
echo "Mencari \"B\" pada array: (" . implode(", ", $arr5) . ")<br>";
$search_result = array_search("B", $arr5);
echo "Hasil array_search: " . $search_result . "<br><br>";

// array_filter
$arr6 = [0, 1, false, 2, "", 3, "array"];
echo "Array awal: (0, 1, false, 2, \"\", 3, \"array\")<br>";
$filtered = array_filter($arr6);
echo "Hasil array_filter: " . implode(" ", $filtered) . "<br><br>";

// sort & rsort
$arr7 = [3, 1, 2];
echo "Array awal: (" . implode(", ", $arr7) . ")<br>";

$sort_arr = $arr7;
sort($sort_arr);
echo "Hasil sort: " . implode(" ", $sort_arr) . "<br>";

$rsort_arr = $arr7;
rsort($rsort_arr);
echo "Hasil rsort: " . implode(" ", $rsort_arr) . "<br><br>";

// Sorting Array Asosiatif (Menggunakan print_r)
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
echo "Array awal: ";
print_r($age);
echo "<br>";

// asort
$temp1 = $age;
asort($temp1);
echo "Hasil asort: ";
print_r($temp1);
echo "<br>";

// ksort
$temp2 = $age;
ksort($temp2);
echo "Hasil ksort: ";
print_r($temp2);
echo "<br>";

// arsort
$temp3 = $age;
arsort($temp3);
echo "Hasil arsort: ";
print_r($temp3);
echo "<br>";

// krsort
$temp4 = $age;
krsort($temp4);
echo "Hasil krsort: ";
print_r($temp4);
echo "<br>";
?>
