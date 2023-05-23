<?php 
  if(session_status() !==  PHP_SESSION_ACTIVE) session_start();
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  

  require 'C:\USBWebserver\USBWebserver_GIP\root\GIP\PHPMailer\src\Exception.php';
  require 'C:\USBWebserver\USBWebserver_GIP\root\GIP\PHPMailer\src\PHPMailer.php';
  require 'C:\USBWebserver\USBWebserver_GIP\root\GIP\PHPMailer\src\SMTP.php';
  

   

    

    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');

        /**z
        We maken hier een variable token met een random token.
        Wij plaatsen deze token waar de klant zijn email gelijk aan de ontvanger is.

        */
      
         $tokenDatabase = null;

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

            $mail->Body = '<div style="background-color: #1f2041; padding: 20px; font-family: Arial, sans-serif; color: #ffffff;">
            <h2 style="color: #ffffff;">Dit is het Management team van RoyalRing.</h2>
            <p style="color: #ffffff;">Klik op de link om je wachtwoord te veranderen!</p>
              <a href="http://localhost:8080/GIP/nl/password_lost/changePassword.php?email='.$_POST["email"].'">
                Verander wachtwoord
              </a>!
          </div>';



            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         
             $mail->send();
             
         } catch (Exception $e) {
             echo "Message kan niet verzonden worden. RoyalRing-Management Error: {$mail->ErrorInfo}";
         }
         echo "Er wordt nu een email naar uw mail gestuurd";
         
?>