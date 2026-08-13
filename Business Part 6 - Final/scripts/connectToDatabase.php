<?php
// scripts/connectToDatabase.php

// Fetch database credentials from Render Environment Variables (Cloud Best Practice)
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASS') ?: '';
$db_name = getenv('DB_NAME') ?: 'u31';

// Attempt to connect to the database
$db = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Clean error handling if the database isn't connected yet
if (!$db) {
    echo "<div style='text-align: center; margin: 20px; padding: 20px; border: 2px solid red; background-color: #ffe6e6;'>";
    echo "<h3>Database Connection Pending</h3>";
    echo "<p>The MySQL database is currently disconnected or still being configured.</p>";
    echo "</div>";
    exit;
}
?>
