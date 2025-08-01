<?php
echo "<h1>Environment Variables Debug</h1>";

echo "<h2>All Environment Variables:</h2>";
foreach ($_ENV as $key => $value) {
    if (strpos($key, 'MYSQL') !== false || strpos($key, 'DATABASE') !== false) {
        echo "<p><strong>$key:</strong> " . (strlen($value) > 50 ? substr($value, 0, 50) . "..." : $value) . "</p>";
    }
}

echo "<h2>Using getenv():</h2>";
$mysql_vars = ['MYSQLHOST', 'MYSQLUSER', 'MYSQLPASSWORD', 'MYSQLDATABASE', 'MYSQLPORT', 'MYSQL_URL', 'DATABASE_URL'];
foreach ($mysql_vars as $var) {
    $value = getenv($var);
    echo "<p><strong>$var:</strong> " . ($value ? (strlen($value) > 50 ? substr($value, 0, 50) . "..." : $value) : 'not set') . "</p>";
}

echo "<h2>System Info:</h2>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Current Directory: " . getcwd() . "</p>";
?>
