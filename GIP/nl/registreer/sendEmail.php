<?php 
    if(session_status() !==  PHP_SESSION_ACTIVE) session_start();

    

    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');

    function generateRandomToken($length = 10) {
      $letters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $lettersLength = strlen($letters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $letters[rand(0, $lettersLength - 1)];
      }
      return $randomString;
   }



  
    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');


        /**z
        We maken hier een variable token met een random token.
        Wij plaatsen deze token waar de klant zijn email gelijk aan de ontvanger is.

        */
         $token = generateRandomToken();
         $sql =  "UPDATE `royalring`.`klant` SET `klantToken` = '$token' WHERE `klant`.`klantEmail` = '".$_SESSION["klantSession"]."';";
         $tokenDatabase = null;

          if ($connect -> query($sql)=== TRUE) {
            $result = $connect -> query($sql);
            echo "<br>Code staat geregistreerd! <br>";
            /**if($result -> num_rows > 0) {
              while($gegevens = $result -> fetch_assoc()) {
                $tokenDatbase = $gegevens["klantToken"];
              }
            }
            */

          } else {
            echo "<br> Er is een fout! Contacteer onze suppot! " . $connect->error;
                 }



         $naar = $_SESSION["klantSession"];
         //Deze moet met een session veranderd worden naar de klant
         $onderwerp = "This is subject";
         
         $bericht = "Dit is het Admin team van royalring. 
                     Gebruik deze code in het registratie formulier! - Code: ".$token;
         $bericht .= " - U gebruikt de code in deze link!"."  <br>
         http://localhost:8080/GIP/nl/registreer/registreerComfirmatie.php";
         
         $header = "From: RoyalRing";
        // $header .= "MIME-Version: 1.0\r\n";
        // $header .= "Content-type: text/html\r\n";
      
         ini_set("SMTP", "smtp.telenet.be");
         ini_set("sendmail_from", "royalring@telenet.be");
         date_default_timezone_set("GMT");
         mail($naar, $onderwerp, $bericht, $header);

         echo "Er wordt nu een email naar uw mail gestuurd";
         
?>