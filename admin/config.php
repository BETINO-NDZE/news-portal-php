<?php
// Use environment variables (recommended for Render)
$host = getenv('dpg-d0sjoak9c44c73f7vevg-a');
$dbname = getenv('news_portal_db_s0y9');
$user = getenv('news_portal_db_s0y9_user');
$password = getenv('xJgAnCJKCC3aF45xHfCsJn1UGedDoFb3');
$port = getenv('5432');

// Default port for Postgres is 5432
if (!$port) {
    $port = 5432;
}

try {
    $connection = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected to PostgreSQL!";
} catch (PDOException $e) {
    die("Not Connected: " . $e->getMessage());
}
?>
