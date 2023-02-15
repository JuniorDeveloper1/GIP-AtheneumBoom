<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <?php include("header.php"); ?>
<form name="form" method="post" >
    <?php 
         $geenfout = 0;
    ?>
    <div id="container">
        <div id="content">
            <table>       
        
        <tr>  <td>  Naam: </td> <td><input type="text" name="naam"></td> 
            <?php

            if(!empty($_POST["naam"])){

            
                $_SESSION["naamSesion"] = $_POST["naam"];

                $geenfout = 0;

            }else if((empty($_POST["naam"]))){
                echo "<td> U heeft geen naam ingevuld! </td>";
                $geenfout = 1;
            }
                
            ?></tr>

    <!-- Gebruiks naam check-->
        <tr>  <td>  Gebruikers naam: </td> <td><input type="text" name="gebruikerNaam"></td>  
        <?php 
                 if(!empty($_POST["gebruikerNaam"])){

                    $_SESSION["gebruikernaamSesion"] = $_POST["gebruikerNaam"];

                     $geenfout = 0;
    
                 }else if((empty($_POST["gebruikerNaam"]))){
                     echo "<td> U heeft geen gebruikersnaam ingevuld! </td>";
                     $geenfout = 1;
                 }
            
            
            ?>  
        </tr>





            <!-- email check-->
            <tr>  <td>  Email: </td> <td><input type="text" name="email"></td>
        <?php 
                 if(!empty($_POST["email"])){

                    $_SESSION["emailSesion"] = $_POST["email"];

                     $geenfout = 0;
    
                 }else if((empty($_POST["email"]))){
                     echo "<td> U heeft geen email ingevuld! </td>";
                     $geenfout = 1;
                 }
            
            
            ?>
    
                 
    
        </tr>


         <!-- wachtwoord check-->

         <tr>  <td>  Wachtwoord: </td> <td><input type="password" name="wachtwoord"></td>
        <?php 
                 if(!empty($_POST["wachtwoord"])){
                     $geenfout = 0;
    
                 }else if((empty($_POST["wachtwoord"]))){
                     echo "<td> U heeft geen wachtwoord ingevuld! </td>";
                     $geenfout = 1;
                 }
            ?>
        </tr>


        <tr>  <td>  Herhaal Wachtwoord: </td> <td><input type="password" name="wachtwoord2"></td>
        <?php 
                 if(!empty($_POST["wachtwoord2"])){

                    if($_POST["wachtwoord"] == $_POST["wachtwoord2"]) {

                        $_SESSION["wachtwoordSesion"] = $_POST["wachtwoord"];

                        $geenfout = 0;
                    }else {
                        echo "Je hebt niet dezelfde passwoord in gevuld!";
                        $geenfout = 1;
                    }
                     
    
                 }else if((empty($_POST["wachtwoord2"]))){
                     echo "<td> U heeft geen wachtwoord ingevuld! </td>";
                     $geenfout = 1;
                 }
            ?>
        </tr>

        <tr>  <td><input type="submit" name="submit"></td> 
    
                <?php 
                    if($geenfout == 1) {
                        if(isset($_POST["submit"])) {
                            echo "<td> er is iets fout gegaan </td>";  
                        } 
                    }

                    if($geenfout ==0) {
                        if(isset($_POST["submit"])) {
                        
                            echo "<script> window.open('login.php')</script>";
                        }
                    }
                
                ?></tr>
        
    
            </table>
        </div>


    <!-- php uitkomst -->
        <footer>

        </footer>
    </div>
</form>


    
</body>
</html>