<?php
echo "<h1>Environment Variables Debug</h1>";

echo "<h2>ALL Environment Variables (searching for database-related):</h2>";
foreach ($_ENV as $key => $value) {
    // Look for any variable that might contain database info
    if (stripos($key, 'mysql') !== false || 
        stripos($key, 'database') !== false || 
        stripos($key, 'db') !== false ||
        stripos($key, 'host') !== false ||
        stripos($key, 'port') !== false ||
        stripos($key, 'user') !== false ||
        stripos($key, 'pass') !== false ||
        stripos($key, 'url') !== false) {
        echo "<p><strong>$key:</strong> " . (strlen($value) > 100 ? substr($value, 0, 100) . "..." : $value) . "</p>";
    }
}

echo "<h2>Trying getenv() for common Railway patterns:</h2>";
$possible_vars = [
    'MYSQL_URL', 'DATABASE_URL', 'DB_URL',
    'MYSQLHOST', 'MYSQLUSER', 'MYSQLPASSWORD', 'MYSQLDATABASE', 'MYSQLPORT',
    'MYSQL_HOST', 'MYSQL_USER', 'MYSQL_PASSWORD', 'MYSQL_DATABASE', 'MYSQL_PORT',
    'DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_NAME', 'DB_PORT'
];

foreach ($possible_vars as $var) {
    $value = getenv($var);
    if ($value) {
        echo "<p><strong>$var:</strong> " . (strlen($value) > 100 ? substr($value, 0, 100) . "..." : $value) . "</p>";
    }
}

echo "<h2>Raw Environment Dump (first 20):</h2>";
$count = 0;
foreach ($_ENV as $key => $value) {
    if ($count < 20) {
        echo "<p><strong>$key:</strong> " . (strlen($value) > 50 ? substr($value, 0, 50) . "..." : $value) . "</p>";
        $count++;
    }
}

echo "<h2>System Info:</h2>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Current Directory: " . getcwd() . "</p>";
?>
