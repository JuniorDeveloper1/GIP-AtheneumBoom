<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link>
    <title>Document</title>
</head>
<body>

<div id="container">

    <form name="form" method="post">
        <header>
            <h1>Examen december 6INF</h1>
        </header>
    
        <nav>
            <ul id="ulEen">
            <li id="login">
            <button id="submit" name="sub">Login</button>   
                <?php
                    if(isset($_POST["sub"])){
                        echo "<script> window.open('login.php'); </script>";
                    }
                ?>
            </li>
            <li>
                    <button id="submit" name="sub2"> Bestand</button>
                    <?php 
                        if(isset($_POST["sub2"])){
                            echo "<script> window.open('bestand.php'); </script>";
                        }
                    
                    ?>

                    
            </li>
            <li>Test
                
            <button id="submit" name="sub4"> Bestand</button>
                    <?php 
                        if(isset($_POST["sub4"])){
                            echo "<script> window.open('rest.php'); </script>";
                        }
                    
                    ?>




            </li>
            <li>  <button id="submit" name="sub3">registreer</button>   
                <?php
                    if(isset($_POST["sub3"])){
                        echo "<script> window.open('registreer.php'); </script>";
                    }
                ?>
                
                </li>
            </ul>
        </nav>

        <div id="navLeft" align="center">
        <ul align="center" id="ulTwee">
            <li>Eerste</li>
            <li>Tweede</li>
            <li>Derde</li>
            <li>Vierde</li>
            </ul>
        </div>

    </form>

</div>
    
</body>
</html>