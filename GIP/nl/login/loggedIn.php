<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assest/loggedIn.css">
    <title>Login</title>

<style> 

</style>
</head>
<body>


    <?php
     include '../modules/header.php'; 
   
     ?>
    <form name="form" method="POST">
            <div id="login" align="middle">
                <?php
                echo "Je bent ingelogd!"."<br>";
                echo "KlantID: ".$_SESSION['klantID']."<br>";
                echo "Voornaam: ".$_SESSION['klantVoornaam']."<br>";
                echo "Achternaam: ".$_SESSION['klantAchternaam']."<br>";
                echo "Gebruikersnaam: ".$_SESSION['klantGebruikersnaam']."<br>"  ;
                echo "Email: ".$_SESSION['kantEmail']."<br>" ;
                ?>
                
                <button name="logOut" id="button">LOG OUT</button>
        <?php 
                    if(isset($_POST["logOut"])){
                        $_SESSION["loggedIn"] = false;
                        echo "Je bent uitgelogd!";
                        unset($_SESSION["klantID"]);
                        unset($_SESSION["klantVoornaam"]);
                        unset( $_SESSION["klantAchternaam"]);
                        unset($_SESSION["klantGebruikersnaam"]);
                        unset($_SESSION["kantEmail"]);
                        echo '<script>window.location.href = "index.php";</script>';
                    }
        ?>
            </div>
   
        <?php
        include '../modules/footer.html'; 
        ?>
    </form>
</body>
</html>