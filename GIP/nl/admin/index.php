<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    include '..\header.html'; 
        include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'); 
        include('./checkAdmin.php');

        if( $_SESSION["isAdmin"] == TRUE) {
           //Werk hier verder, je bent een admin.  
?>




<?php
        } //This is the end of if($_SESSION["isAdmin"])
?>

    

<?php  include '..\footer.html';?>
    
</body>
</html>