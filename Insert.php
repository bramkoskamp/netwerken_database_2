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

        $host     = 'https://gc-webhosting.nl';
        $db       = 'net24pveltman_phptest';
        $user     = 'net24pveltman_dinges';
        $password = '0LrW^;ab&Rw?';
        $port     = 2083;
        $charset  = 'utf8mb4';
          
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $db = new mysqli($host, $user, $password, $db, $port);

        $db->set_charset($charset);
        $db->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
    
        $first_name =  $_REQUEST['fname'];
        $last_name = $_REQUEST['lname'];
        $date_of_birth =  $_REQUEST['bdate'];

        $sql = "INSERT INTO users (first_name, last_name, Date_Of_Birth) VALUES ('$first_name', 
        '$last_name','$date_of_birth')";

    if(mysqli_query($db, $sql)){
        echo "<h3>User added</h3>"; 

        echo nl2br("\n$first_name $last_name\n "
            . "$date_of_birth");
    } else{
        echo "ERROR: Sorry $sql. "
            . mysqli_error($db);
    }
    ?>
</body>
</html>