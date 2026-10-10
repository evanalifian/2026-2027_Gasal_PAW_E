<?php
//push
function push($array, $tambah){
	array_push($array, $tambah);
	echo 'Hasil array_push : ';
	print_r($array);
}

$angka = ['1', '2'];
push($angka, '5');

//merge
function merge($array1, $array2){
	$hasil = array_merge($array1, $array2);
	echo 'Hasil array_merge : ';
	print_r($hasil);
}

echo '<br>';
$angka2 = ['6', '7'];
merge($angka, $angka2);

//search
function search($cari, $array){
	$hasil = array_search($cari, $array);
	echo 'Hasil array_search : ';
	print_r($hasil);
}
echo '<br>';
$huruf = ['a', 'b', 'c'];
search('b', $huruf);

//filter
function filter($array){
	array_filter($array);
	echo 'Hasil array_filter : ';
	print_r($array);
}
echo '<br>';
$arr = [0, 1, false, 2, '', 3, 'array'];
filter($arr);

//sort
function sort_array($array){
	sort($array);
	echo 'Hasil sort : ';
	print_r($array);
}

//rsort
function rsort_array($array){
	rsort($array);
	echo 'Hasil rsort : ';
	print_r($array);
}

echo'<br>';
$arr2 = [3,1,2];
sort_array($arr2);
echo'<br>';
rsort_array($arr2);

//asort
function asort_array($array){
	asort($array);
	echo 'Hasil asort : ';
	print_r($array);
}

//ksort
function ksort_array($array){
	ksort($array);
	echo 'Hasil ksort : ';
	print_r($array);
}

//arsort
function arsort_array($array){
	arsort($array);
	echo 'Hasil arsort : ';
	print_r($array);
}

//krsort
function krsort_array($array){
	krsort($array);
	echo 'Hasil krsort : ';
	print_r($array);
}

echo '<br>';
$arr3 = ['Peter' => 35, 'Ben' => 37, 'Joe' => 43];
asort_array($arr3);
echo '<br>';
ksort_array($arr3);
echo '<br>';
arsort_array($arr3);
echo '<br>';
krsort_array($arr3);

