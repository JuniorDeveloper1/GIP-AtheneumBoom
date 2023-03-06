<?php 

    function generateRandomString($length = 10) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
   }
  

     //Dit is de session name
      $_SESSION["RegisterCode"] = generateRandomString();
 

    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');

    
         $naar = "nickje.debut@gmail.com";
         //Deze moet met een session veranderd worden naar de klant
         $onderwerp = "This is subject";
         
         $bericht = "Dit is het Admin team van royalring. 
                     Gebruik deze code in het registratie formulier! Code: "."$[CODE].   ";
         $bericht .= "U gebruikt de code in deze link!"."  <br>
         http://localhost:8080/GIP/nl/registreer/registreerComfirmatie.php";
         
         $header = "From: RoyalRing";
        // $header .= "MIME-Version: 1.0\r\n";
        // $header .= "Content-type: text/html\r\n";

      
      
         ini_set("SMTP", "smtp.telenet.be");
         ini_set("sendmail_from", "mailtest@telenet.be");
         date_default_timezone_set("GMT");
         mail($naar, $onderwerp, $bericht, $header);

         echo "Er wordt nu een email naar uw mail gestuurd";
         
?>