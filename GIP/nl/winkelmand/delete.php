<?php
  
    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'); 
    $id = $_GET["id"];
    $klantID = $_GET["klantNaam"];

    echo $id;
    echo $klantID;

  
        $deleteSQL = "DELETE FROM winkelkar WHERE winkelkarID = $id AND klantID = $klantID";
        


        /** If the item cannot be deleted. Set the header() into comments and check what error is given. */
        if ($deleteResult = $connect->query($deleteSQL) == true) {
          
            echo "Item deleted successfully.";
            
        } else {
            
            echo "Error: " . $connect->error . "";
        }
        
    

    header("Location: index.php");


?>