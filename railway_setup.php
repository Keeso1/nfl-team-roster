<?php
echo "<h1>🚀 Railway MySQL Setup Guide</h1>";

echo "<h2>Step 1: Get MySQL Connection Details</h2>";
echo "<p>Go to your <strong>MySQL service</strong> in Railway and copy these values from the Variables tab:</p>";
echo "<ul>";
echo "<li><strong>MYSQLHOST</strong> - The database host</li>";
echo "<li><strong>MYSQLUSER</strong> - Usually 'root'</li>";
echo "<li><strong>MYSQLPASSWORD</strong> - The database password</li>";
echo "<li><strong>MYSQLDATABASE</strong> - The database name</li>";
echo "<li><strong>MYSQLPORT</strong> - Usually 3306</li>";
echo "</ul>";

echo "<h2>Step 2: Add Environment Variables to Your PHP App</h2>";
echo "<p>Go to your <strong>PHP app service</strong> (nfl-team-roster) → Variables tab and add:</p>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr><th>Variable Name</th><th>Variable Value</th></tr>";
echo "<tr><td>DB_HOST</td><td>[Copy MYSQLHOST value]</td></tr>";
echo "<tr><td>DB_USER</td><td>[Copy MYSQLUSER value]</td></tr>";
echo "<tr><td>DB_PASSWORD</td><td>[Copy MYSQLPASSWORD value]</td></tr>";
echo "<tr><td>DB_NAME</td><td>[Copy MYSQLDATABASE value]</td></tr>";
echo "<tr><td>DB_PORT</td><td>[Copy MYSQLPORT value]</td></tr>";
echo "</table>";

echo "<h2>Step 3: Alternative - Use Service References</h2>";
echo "<p>Or try adding these service references to your PHP app:</p>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr><th>Variable Name</th><th>Variable Value</th></tr>";
echo "<tr><td>MYSQL_URL</td><td>\${{ MySQL.MYSQL_URL }}</td></tr>";
echo "</table>";
echo "<p><em>Note: Replace 'MySQL' with your actual MySQL service name if different</em></p>";

echo "<h2>Current Environment Check:</h2>";
echo "<p>Railway Project: " . ($_ENV['RAILWAY_PROJECT_NAME'] ?? 'Not detected') . "</p>";
echo "<p>We are " . (isset($_ENV['RAILWAY_PROJECT_NAME']) ? 'ON' : 'NOT ON') . " Railway</p>";
?>
