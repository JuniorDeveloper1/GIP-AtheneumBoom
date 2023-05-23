<?php 
  if(session_status() !==  PHP_SESSION_ACTIVE) session_start();
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  

  require 'C:\USBWebserver\USBWebserver_GIP\root\GIP\PHPMailer\src\Exception.php';
  require 'C:\USBWebserver\USBWebserver_GIP\root\GIP\PHPMailer\src\PHPMailer.php';
  require 'C:\USBWebserver\USBWebserver_GIP\root\GIP\PHPMailer\src\SMTP.php';
  

   

    

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

         
         $header = "From: RoyalRing";

         $mail = new PHPMailer(true);

         try {
             
             $mail->isSMTP();                                            
             $mail->Host       = 'smtp.gmail.com';                     
             $mail->SMTPAuth   = true;                                   
             $mail->Username   = 'royalring.management@gmail.com';
             $mail->Password   = 'yotbzlnyzmsvhbzs';
             $mail->SMTPSecure = 'ssl';            
             $mail->Port       = 465;                                   
         
             //Recipients
             $mail->setFrom('royalring.management@gmail.com', 'RoyalRing Management');
             $mail->addAddress($_SESSION["klantSession"]);          
            // $mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');   
         
             //Content
             $mail->isHTML(true);                                
             $mail->Subject = $header;

            //$Bericht voor de BODY
            $mail->Body = '<div style="background-color: #1f2041; padding: 20px; color: #ffffff; font-family: Arial, sans-serif;">
            <h2 style="color: #ffffff;>Dit is het Management team van RoyalRing.</h2><br>
            <p style="color: #ffffff;>Gebruik deze code in het registratie formulier!'.$token.'</p> <br> <br>
              <a href="http://localhost:8080/GIP/nl/registreer/registreerComfirmatie.php"">
                Klik op deze link voor jou code!
              </a>!
            </p>
          </div>';

            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         
             $mail->send();
             
         } catch (Exception $e) {
             echo "Message kan niet verzonden worden. RoyalRing-Management Error: {$mail->ErrorInfo}";
         }
         echo "Er wordt nu een email naar uw mail gestuurd";
         
?>