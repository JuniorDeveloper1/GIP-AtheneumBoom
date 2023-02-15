<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databank test</title>

    <style> 
        #prent {
            background-color: yellow;
            width: 150px;
            height: auto;
            border: 1px solid black;
            float: left;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "test2";
        $teller = 0;

        
        $connect1 = new mysqli($servername,$username,$password, $dbname);

        if($connect1->connect_error){
            die("Connection failed: ".$connect1->connect_error);
        }
        else {
            echo "Connection successfully! <br>";

            $sql = "SELECT * FROM klant"; 
            $qresult = $connect1 -> query($sql);
        }
    ?>

    <?php 
    if($qresult -> num_rows > 0)
        while($endresult = $qresult -> fetch_assoc() ) {
    ?>
    
    <?php 
    
        /** echo "<table border='1px'>";
        echo " <tr> <td> Voornaam: </td> <td> ".$endresult["klantVoornaam"]."</td> </tr>";
        echo " <tr> <td> Naam: </td> <td> ".$endresult["klantNaam"]."</td> </tr>";
        echo "  <td> Postcode: </td> <td> ".$endresult["klantPostcode"]."</td> </tr>";
        echo "</table>"; 
        **/ 
        
        echo "<div id='prent'>";
            echo "Voornaam: ".$endresult["klantVoornaam"]." <br>";
            echo "Naam: ".$endresult["klantNaam"]." <br>";
            echo "Postcode: ".$endresult["klantPostcode"]." <br>";

        echo "</div>";

    } else {

        echo "Er zijn gegevens in de databank";
    } ?>


    <?php /**include("C:/USBWebserver v8.6/root/GIP/nl/header.html");*/?>
   
</body>
</html>