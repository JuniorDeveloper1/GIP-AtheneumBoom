<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php //$_SESSION["loggedIn"]; ?>

<?php

<<<<<<< HEAD
        if( $_SESSION["loggedIn"] == false) {
=======
        if( $_SESSION["loggedIn"]== false) {
>>>>>>> admin
            include("./notLoggedIn.php");
        }else {
            include("./loggedIn.php");
        
        }

?>
    
</body>
</html>
