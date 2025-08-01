<?php
// TEMPORARY: Direct database connection for testing
// Replace these with your actual Railway MySQL connection details

function connectDB() {
    // Get these values from your Railway MySQL service Variables tab:
    $servername = "YOUR_MYSQL_HOST_HERE";  // From MYSQLHOST
    $username = "YOUR_MYSQL_USER_HERE";    // From MYSQLUSER  
    $password = "YOUR_MYSQL_PASSWORD_HERE"; // From MYSQLPASSWORD
    $db = "YOUR_DATABASE_NAME_HERE";        // From MYSQLDATABASE
    $port = 3306;                          // From MYSQLPORT

    // CREATE CONNECTION
    $conn = new mysqli($servername, $username, $password, $db, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    } 
    return $conn;
}

echo "<h1>Temporary Connection Test</h1>";
echo "<p>Replace the placeholder values in connectdb_temp.php with your actual MySQL details from Railway.</p>";
echo "<p>Find these in: Railway → MySQL Service → Variables tab</p>";
echo "<ul>";
echo "<li>MYSQLHOST → \$servername</li>";
echo "<li>MYSQLUSER → \$username</li>";
echo "<li>MYSQLPASSWORD → \$password</li>";
echo "<li>MYSQLDATABASE → \$db</li>";
echo "</ul>";
?>
