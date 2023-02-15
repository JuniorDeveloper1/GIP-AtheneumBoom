<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database test</title>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "test2";

            $connect = new mysqli($servername, $username, $password, $dbname);
            
            $connected = false;

            if ($connect -> connect_error) {
                die("Connection failed: ".$connect -> connect_error);
            } else {
                echo "Connection succesfully!<br>";
                $connected = true;
            }

            // Maak gebruiker
            if (isset($_POST["submit"]) and $connected) {
                if (!empty($_POST["voornaam"]) and !empty($_POST["naam"]) and !empty($_POST["postcode"])) {
                    $connect -> query("INSERT INTO `test2`.`klant` (`klantID`, `klantVoornaam`, `klantNaam`, `klantPostcode`) VALUES (NULL, '".$_POST["voornaam"]."', '".$_POST["naam"]."', '".$_POST["postcode"]."');");
                    echo "Gebruiker toegevoegd!<br>";
                }
            }
       ?>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Postcode</th>
            </tr>
            <?php
                if ($connected == true) {
                    $query = "SELECT * FROM klant;";

                    $result = $connect -> query($query);
        
                    /*if ($result -> num_rows > 0) {
                        foreach ($result as $klant) {
                            echo $klant["klantVoornaam"]." ".$klant["klantNaam"]."<br>";
                        }
                    } else {
                        echo "Geen klanten gevonden.<br>";
                    }*/

                    if ($result -> num_rows > 0) {
                        while ($klant = $result -> fetch_assoc()) {
                            echo "<tr>
                                <td>".$klant["klantID"]."</td>
                                <td>".$klant["klantVoornaam"]."</td>
                                <td>".$klant["klantNaam"]."</td>
                                <td>".$klant["klantPostcode"]."</td>
                            </tr>";
                        }
                    } else {
                        echo "Geen klanten gevonden.<br>";
                    }
                }
            ?>
        </table>
        <br>
        <fieldset>
            <legend>Klant toevoegen</legend>
            <form method="POST">
                <table>
                    <tr>
                        <th>Voornaam</th>
                        <td>
                            <input type="text" name="voornaam">
                        </td>
                    </tr>
                    <tr>
                        <th>Achternaam</th>
                        <td>
                            <input type="text" name="naam">
                        </td>
                    </tr>
                    <tr>
                        <th>Postcode</th>
                        <td>
                            <input type="text" name="postcode">
                        </td>
                    </tr>
                </table>
                <input type="submit" name="submit">
            </form>
        </fieldset>
    </body>
</html>