<?php
// scripts/connectToDatabase.php

// Fetch database credentials from Render Environment Variables (Cloud Best Practice)
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASS') ?: '';
$db_name = getenv('DB_NAME') ?: 'u31';

$db = false;

// PHP 8+ throws exceptions for mysqli errors. We must catch them safely to prevent crashes.
try {
    $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (Exception $e) {
    // Catch the fatal error silently
    $db = false; 
}

// If the database isn't connected, show a clean, recruiter-friendly message
if (!$db) {
    echo "<div style='text-align: center; margin: 20px; padding: 20px; border: 2px solid #f44336; background-color: #ffe6e6; border-radius: 8px; font-family: sans-serif;'>";
    echo "<h3 style='color: #b71c1c; margin-top: 0;'>Database Connection Pending</h3>";
    echo "<p style='color: #b71c1c; margin-bottom: 0;'>The MySQL database is currently disconnected. E-store features are temporarily unavailable while the server is being configured.</p>";
    echo "</div>";
    exit;
}
?>
