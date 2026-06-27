<?php
// Arithmetic Operators
$a = 20; $b = 6;
echo "<h3>Arithmetic Operators</h3>";
echo "a + b = " . ($a + $b) . "<br>";
echo "a - b = " . ($a - $b) . "<br>";
echo "a * b = " . ($a * $b) . "<br>";
echo "a / b = " . ($a / $b) . "<br>";
echo "a % b = " . ($a % $b) . "<br>";
echo "a ** b = " . ($a ** $b) . "<br>";

// Assignment Operators
echo "<h3>Assignment Operators</h3>";
$x = 10;
$x += 5; echo "x += 5 → $x<br>";
$x -= 3; echo "x -= 3 → $x<br>";
$x *= 2; echo "x *= 2 → $x<br>";
$x /= 4; echo "x /= 4 → $x<br>";
$x %= 3; echo "x %= 3 → $x<br>";

// Comparison Operators
echo "<h3>Comparison Operators</h3>";
var_dump($a == $b);   // false
var_dump($a != $b);   // true
var_dump($a > $b);    // true
var_dump($a < $b);    // false
var_dump($a >= 20);   // true
var_dump($a === 20);  // true (strict)

// Logical Operators
echo "<h3>Logical Operators</h3>";
$p = true; $q = false;
var_dump($p && $q);  // false
var_dump($p || $q);  // true
var_dump(!$p);       // false

// String Operator
echo "<h3>String Operator</h3>";
$str1 = "Hello"; $str2 = " World";
echo $str1 . $str2 . "<br>";

// Increment/Decrement
echo "<h3>Increment/Decrement</h3>";
$c = 5;
echo "c++ = " . $c++ . "<br>";  // 5
echo "++c = " . ++$c . "<br>";  // 7
echo "c-- = " . $c-- . "<br>";  // 7
echo "--c = " . --$c . "<br>";  // 5
?>