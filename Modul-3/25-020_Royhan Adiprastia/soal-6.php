<?php
echo "<h3>1. array_push()</h3>";

$fruits = array("Mango", "Apple", "Orange");
array_push($fruits, "Banana", "Grape");
echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<h3>2. array_merge()</h3>";

$moreFruits = array("Watermelon", "Papaya");
$mergedFruits = array_merge($fruits, $moreFruits);
echo "<pre>";
print_r($mergedFruits);
echo "</pre>";

echo "<h3>3. array_values()</h3>";

$height = array("Andy" => 176, "Barry" => 165, "Charlie" => 170);
$values = array_values($height);
echo "<pre>";
print_r($values);
echo "</pre>";

echo "<h3>4. array_search()</h3>";

$search = array_search("Orange", $fruits);

if ($search !== false) {
    echo "Orange ditemukan pada indeks: " . $search;
} else {
    echo "Data tidak ditemukan.";
}

echo "<h3>5. array_filter()</h3>";

$numbers = array(10, 15, 20, 25, 30);
$filtered = array_filter($numbers, function ($number) {
    return $number > 20;
});

echo "<pre>";
print_r($filtered);
echo "</pre>";

echo "<h3>6. Sorting Array Terindeks</h3>";

$indexed = array(40, 10, 30, 20);

sort($indexed);
echo "sort():<pre>";
print_r($indexed);
echo "</pre>";

rsort($indexed);
echo "rsort():<pre>";
print_r($indexed);
echo "</pre>";

echo "<h3>7. Sorting Array Asosiatif</h3>";

$scores = array("Andi" => 80, "Budi" => 95, "Citra" => 75);

$byValue = $scores;
asort($byValue);
echo "asort():<pre>";
print_r($byValue);
echo "</pre>";

$byValueDesc = $scores;
arsort($byValueDesc);
echo "arsort():<pre>";
print_r($byValueDesc);
echo "</pre>";

$byKey = $scores;
ksort($byKey);
echo "ksort():<pre>";
print_r($byKey);
echo "</pre>";

$byKeyDesc = $scores;
krsort($byKeyDesc);
echo "krsort():<pre>";
print_r($byKeyDesc);
echo "</pre>";
?>