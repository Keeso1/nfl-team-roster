<?php
// Database setup script - run this once to initialize your database
require __DIR__ . '/connectdb.php';

echo "<h1>Database Setup</h1>";

$conn = connectDB();

// Read and execute the schema file
$schema_sql = file_get_contents(__DIR__ . '/database_schema.sql');

// Split by semicolon and execute each statement
$statements = explode(';', $schema_sql);

foreach ($statements as $statement) {
    $statement = trim($statement);
    if (!empty($statement) && $statement !== 'SHOW TABLES') {
        if ($conn->query($statement) === TRUE) {
            echo "<p style='color: green;'>✅ Executed: " . substr($statement, 0, 50) . "...</p>";
        } else {
            echo "<p style='color: red;'>❌ Error: " . $conn->error . "</p>";
            echo "<p>Statement: " . substr($statement, 0, 100) . "...</p>";
        }
    }
}

echo "<h2>Database Tables:</h2>";
$result = $conn->query("SHOW TABLES");
if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        echo "<p>📋 " . $row[0] . "</p>";
    }
} else {
    echo "<p>No tables found</p>";
}

$conn->close();
echo "<h3>Setup complete! You can now delete this file and use your app.</h3>";
echo "<a href='home.php'>Go to Home Page</a>";
?>
