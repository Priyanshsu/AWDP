<?php
$n = 6; // Change to find factorial of any number

// Using loop
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}
echo "Factorial of $n = $factorial<br>";

// Using recursion
function factRecursive($num) {
    if ($num <= 1) return 1;
    return $num * factRecursive($num - 1);
}
echo "Factorial of $n (recursive) = " . factRecursive($n);
?>