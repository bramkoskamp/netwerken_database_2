<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    $host     = 'localhost';
    $db       = 'net24bkoskamp_db_netwerken';
    $user     = 'net24bkoskamp_bram';
    $password = 'Welkom123!';
    $port     = 2083;
    $charset  = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;port=$port;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $password);
        // Set PDO to throw exceptions on errors
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Set the server timezone to UTC
        $pdo->exec("SET time_zone = '+00:00'");

        $first_name = $_REQUEST['fname'];
        $last_name = $_REQUEST['lname'];
        $date_of_birth = $_REQUEST['bdate'];

        $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, Date_Of_Birth) VALUES (?, ?, ?)");
        $stmt->execute([$first_name, $last_name, $date_of_birth]);

        echo "<h3>User added</h3>";
        echo nl2br("\n$first_name $last_name\n" . "$date_of_birth");
    } catch (PDOException $e) {
        echo "ERROR: Sorry " . $e->getMessage();
    }
    ?>
</body>
</html>
