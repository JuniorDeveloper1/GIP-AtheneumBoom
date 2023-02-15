<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "royalring";

    $connect = new mysqli($servername, $username, $password, $dbname); 
    if($connect -> connect_error){
        die("Kan geen verbinding maken met de database");
    }
    
    ?>
</body>
</html>