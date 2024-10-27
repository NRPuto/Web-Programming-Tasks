<?php
function loadEnv($filePath) {
    if (!file_exists($filePath)) {
        return;
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2);
        putenv(trim($name) . '=' . trim($value));
    }
}

// Load the environment file
loadEnv(__DIR__ . '/.env');

$servername = "localhost";
$username = "root"; 
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');
// $password = "liomoid123&&"; 
// $dbname = "portfoliophp"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfulssly";






?>

