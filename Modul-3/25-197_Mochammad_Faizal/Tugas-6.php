<?php
//1
$ArrSatu = ["A"];
array_push($ArrSatu, "B");

echo "Array awal: (\"$ArrSatu[0]\") <br>";
echo "Hasil array_push: " . implode(" ", $ArrSatu) . "<br><br>";

//2
$ArrDuwa = ["C"];
echo "Array awal: (\"" . implode("\", \"", $ArrSatu) . "\")" . " digabung dengan (\"$ArrDuwa[0]\")" . "<br>";
$ArrSatu = array_merge($ArrSatu, $ArrDuwa);
echo "Hasil array_merge: " . implode(" ", $ArrSatu) . "<br><br>";

//3
$ArrTiga = [
    "x" => 1,
    "y" => 2
];

echo "Array awal = (";
foreach ($ArrTiga as $a => $av) {
    echo "\"$a\" => $av, ";
} echo ")<br>";

echo "Hasil array_values: ";
foreach (array_values($ArrTiga) as $avv) {
    echo "$avv ";
}

//4
echo "<br><br>Mencari B pada array " . "(\"" . implode("\", \"", $ArrSatu) . "\")  <br>";
echo "Hasil array_search: ". array_search("B", $ArrSatu) . "<br><br>";

//5
$Arrlimak = [0, 1, false, 2, "", 3, "array"];

echo "Array awal = (";
foreach ($Arrlimak as $v) {
    if ($v === false) {
        echo "false, ";
    } elseif (is_string($v)) {
        echo '"' . $v . '", ';
    } else {
        echo $v . ", ";
    } 
} echo ") <br>";

echo "Hasil array_filter: ";
foreach (array_filter($Arrlimak) as $v) {
    echo "$v ";
} echo "<br><br>";

//6
$ArrEnamm = [3, 1, 2];
echo "Array awal: (" . implode(", ", $ArrEnamm) . ")<br>";

sort($ArrEnamm);
echo "Hasil sort: " . implode(" ", $ArrEnamm);

rsort($ArrEnamm);
echo "<br> Hasil rsort: " . implode(" ", $ArrEnamm);

echo "<br><br>";
//7
$ArrToedjoeh = [
    "Peter" => 35,
    "Ben" => 37,
    "Joe" => 43
];


echo "Hasil array awal: (";
foreach ($ArrToedjoeh as $a => $av) {
    echo "\"$a\" => $av, ";
} echo ")<br>";

asort($ArrToedjoeh);
echo "Hasil asort: ";
foreach ($ArrToedjoeh as $a => $av) {
    echo "$a => $av, ";
} echo "<br>";

ksort($ArrToedjoeh);
echo "Hasil ksort: ";
foreach ($ArrToedjoeh as $a => $av) {
    echo "$a => $av, ";
} echo "<br>";

arsort($ArrToedjoeh);
echo "Hasil arsort: ";
foreach ($ArrToedjoeh as $a => $av) {
    echo "$a => $av, ";
} echo "<br>";

krsort($ArrToedjoeh);
echo "Hasil krsort: ";
foreach ($ArrToedjoeh as $a => $av) {
    echo "$a => $av, ";
} echo "<br>";
