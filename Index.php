<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1><?php echo "Hello World" ?></h1>

    
</body>
<?php       ini_set('display_errors', 'On');
            error_reporting(E_ALL);

          $host     = 'net24pveltman.gc-webhosting.nl';
          $db       = 'net24pveltman_phptest';
          $user     = 'net24pveltman_harry';
          $password = '@cVw#+C}#P.a';
          $port     = 3306;
          $charset  = 'utf8mb4';
          
          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
          $db = new mysqli($host, $user, $password, $db, $port);
          $db->set_charset($charset);
          $db->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
    
          $result = $db->query("SELECT * FROM onzin");
          while ($row = $result->fetch_assoc()) {
              echo  $row['id']." - ".$row['name']."<br />\n";
          }

 ?>
</html>