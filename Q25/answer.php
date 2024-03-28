<?php
// Start session
session_start();

// Check if a cookie is set, if not, set a new one
if (!isset($_COOKIE['visit_count'])) {
    setcookie('visit_count', 1, time() + (86400 * 30), "/"); // Cookie set to expire in 30 days
} else {
    // If cookie is set, increment its value
    $visit_count = $_COOKIE['visit_count'] + 1;
    setcookie('visit_count', $visit_count, time() + (86400 * 30), "/"); // Update cookie value
}

// Increment session visit count
if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 1;
} else {
    $_SESSION['visit_count']++;
}

// Display session and cookie information
echo "<h1>Session and Cookie Demo</h1>";
echo "<h2>Session:</h2>";
echo "Visit Count: " . $_SESSION['visit_count'] . "<br>";
echo "Session ID: " . session_id() . "<br>";

echo "<h2>Cookie:</h2>";
echo "Visit Count: " . $_COOKIE['visit_count'] . "<br>";

?>
