<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php
     include '..\header.html'; 
     echo "Je bent ingelogd!"
     ?>
    <form name="form" method="POST">
        <?php
        echo $_SESSION['klantID']."<br>";
        echo $_SESSION['klantVoornaam']."<br>";
        echo $_SESSION['klantGebruikersnaam']."<br>"  ;
        echo $_SESSION['kantEmail']."<br>" ;
        ?>
        
        <button name="logOut">Log OUT!</button>
        <?php 
        if(isset($_POST["logOut"])){
            $_SESSION["loggedIn"] = false;
            echo "Je bent uitgelogd!";
            unset($_SESSION["klantID"]);
            unset($_SESSION["klantVoornaam"]);
            unset($_SESSION["klantGebruikersnaam"]);
            unset($_SESSION["kantEmail"]);
        }
      

        include '..\footer.html'; 
        ?>
    </form>
</body>
</html>