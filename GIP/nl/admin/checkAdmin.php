<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start();       
include 'C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'; 
    
    
    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
        $_SESSION["isAdmin"] = false;
        $klantID = $_SESSION["klantID"];
        $adminSQL = "SELECT isAdmin FROM Admin WHERE KlantID = $klantID";
        $adminResult =  $connect -> query($adminSQL);
       
        if($adminResult -> num_rows > 0) {
            while($admin = $adminResult -> fetch_assoc()) { 
                if(($admin["isAdmin"] == 1))
                {
                echo "Je bent een admin!";
                $_SESSION["isAdmin"] = true;
                }else {
                    echo "Je bent geen admin.";
                }
               
            }
        }else {
            //User does not exist in database
            echo "Je bent geen admin.";
        }


    }else {
        echo "You're not logged in!";
    }
    
   
    

?>