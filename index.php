<!DOCTYPE html>
<html>
<head>
    <title>My PHP App</title>
</head>
<body>
    <h1>Welcome to My PHP App</h1>
    <?php
    // Database connection
    $servername = "localhost";
    $username = "myappuser";
    $password = "mypassword";
    $dbname = "myappdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully to MySQL!";
    ?>
</body>
</html>
