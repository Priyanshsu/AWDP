<?php
// Example 1: Indexed array
$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

echo "<h3>Fruits List:</h3><ul>";
foreach ($fruits as $fruit) {
    echo "<li>$fruit</li>";
}
echo "</ul>";

// Example 2: Associative array
$student = ["Name" => "Rahul", "Roll" => 101, "Branch" => "CE", "CGPA" => 8.7];

echo "<h3>Student Details:</h3>";
foreach ($student as $key => $value) {
    echo "<b>$key:</b> $value<br>";
}

// Example 3: Nested array
$marks = [
    ["name" => "Alice", "marks" => 85],
    ["name" => "Bob",   "marks" => 72],
    ["name" => "Carol", "marks" => 90],
];

echo "<h3>Mark List:</h3>";
foreach ($marks as $row) {
    echo "Name: {$row['name']}, Marks: {$row['marks']}<br>";
}
?>