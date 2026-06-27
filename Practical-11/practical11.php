<?php
$arr = [1, 3, 5, 7, 9, 11];
$sum = 0;

echo "Array elements: ";
foreach ($arr as $val) {
    echo "$val ";
    $sum += $val;
}

echo "<br>Sum of 1+3+5+7+9+11 = $sum";
?>