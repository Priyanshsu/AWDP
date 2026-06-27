<?php
// ---- STRING FUNCTIONS ----
echo "<h3>String Functions</h3>";
$str = "  Hello World PHP  ";
echo "strlen: "      . strlen($str)             . "<br>";
echo "strtoupper: "  . strtoupper($str)          . "<br>";
echo "strtolower: "  . strtolower($str)          . "<br>";
echo "trim: '"       . trim($str)               . "'<br>";
echo "str_replace: " . str_replace("PHP","World",$str) . "<br>";
echo "strrev: "      . strrev("Hello")          . "<br>";
echo "substr: "      . substr("Hello World",6,5). "<br>";
echo "strpos: "      . strpos("Hello World","World") . "<br>";
echo "str_repeat: "  . str_repeat("Ha",3)       . "<br>";

// ---- MATH FUNCTIONS ----
echo "<h3>Math Functions</h3>";
echo "abs(-15): "    . abs(-15)     . "<br>";
echo "sqrt(144): "   . sqrt(144)    . "<br>";
echo "pow(2,8): "    . pow(2,8)     . "<br>";
echo "ceil(4.3): "   . ceil(4.3)    . "<br>";
echo "floor(4.9): "  . floor(4.9)   . "<br>";
echo "round(4.567,2): " . round(4.567,2) . "<br>";
echo "max(3,7,1,9): "  . max(3,7,1,9)   . "<br>";
echo "min(3,7,1,9): "  . min(3,7,1,9)   . "<br>";
echo "rand(1,100): " . rand(1,100)  . "<br>";

// ---- DATE FUNCTIONS ----
echo "<h3>Date Functions</h3>";
echo "Today: "         . date("d-m-Y")            . "<br>";
echo "Day: "           . date("l")                . "<br>";
echo "Time: "          . date("h:i:s A")          . "<br>";
echo "Unix timestamp: ". time()                   . "<br>";
echo "Formatted: "     . date("d M Y, D")         . "<br>";

// ---- ARRAY FUNCTIONS ----
echo "<h3>Array Functions</h3>";
$arr = [5, 3, 8, 1, 9, 2];
echo "Original: ";      print_r($arr);
sort($arr);
echo "<br>After sort: "; print_r($arr);
echo "<br>count: "       . count($arr)            . "<br>";
echo "array_sum: "       . array_sum($arr)        . "<br>";
echo "array_reverse: ";  print_r(array_reverse($arr));
echo "<br>in_array(8): " . (in_array(8,$arr) ? "Yes" : "No") . "<br>";
echo "array_search(8): ". array_search(8,$arr)   . "<br>";

$arr2 = [1, 2, 3];
$arr3 = [4, 5, 6];
echo "array_merge: "; print_r(array_merge($arr2,$arr3));
echo "<br>array_slice(0,3): "; print_r(array_slice($arr,0,3));
?>