<?php
session_start();

// ========== COOKIE ==========
// Set cookie (valid for 1 hour)
if (!isset($_COOKIE["username"])) {
    setcookie("username", "Rahul", time() + 3600);
    echo "Cookie 'username' has been SET.<br>";
} else {
    echo "Cookie Value: " . $_COOKIE["username"] . "<br>";
}

// Delete cookie
if (isset($_GET["delete_cookie"])) {
    setcookie("username", "", time() - 3600);
    echo "Cookie DELETED.<br>";
}

// ========== SESSION ==========
// Set session variables
if (!isset($_SESSION["user"])) {
    $_SESSION["user"]  = "Alice";
    $_SESSION["role"]  = "Student";
    $_SESSION["login"] = date("h:i A");
    echo "<br>Session CREATED.<br>";
}

echo "<h3>Session Data:</h3>";
echo "User: "  . $_SESSION["user"]  . "<br>";
echo "Role: "  . $_SESSION["role"]  . "<br>";
echo "Login: " . $_SESSION["login"] . "<br>";
echo "Session ID: " . session_id() . "<br>";

// Destroy session
if (isset($_GET["logout"])) {
    session_destroy();
    echo "<br>Session DESTROYED. <a href='practical15.php'>Restart</a>";
    exit;
}
?>

<br>
<a href="practical15.php?delete_cookie=1">Delete Cookie</a> |
<a href="practical15.php?logout=1">Logout (Destroy Session)</a> |
<a href="practical15.php">Refresh</a>