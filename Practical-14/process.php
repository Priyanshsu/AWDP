<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    echo "<h2>POST Data Received:</h2>";
    echo "Name: "   . htmlspecialchars($_POST["name"])   . "<br>";
    echo "Email: "  . htmlspecialchars($_POST["email"])  . "<br>";
    echo "Age: "    . htmlspecialchars($_POST["age"])    . "<br>";
    echo "Gender: " . htmlspecialchars($_POST["gender"]) . "<br>";
    echo "Course: " . htmlspecialchars($_POST["course"]) . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["query"])) {
    echo "<h2>GET Data Received:</h2>";
    echo "Search Query: " . htmlspecialchars($_GET["query"]) . "<br>";
}

// REQUEST method (works for both)
echo "<h2>Using \$_REQUEST:</h2>";
if (!empty($_REQUEST)) {
    foreach ($_REQUEST as $key => $value) {
        if ($key != "submit")
            echo "$key: " . htmlspecialchars($value) . "<br>";
    }
}

echo "<br><a href='form.html'>Go Back</a>";
?>