<!DOCTYPE html>
<html lang="en">
<head>


<script> 
    function test() {
        alert("test");
        
    }
    </script>
</head>
<body>

<form name="form" method="post"> 
    <fieldset>
        <legend>Login</legend>
        <input name="login"> 
    <button name="verzend" onclick="test()">
    <?php echo "test";?></button>
    </fieldset>

    <?php 
        if(isset($_POST["verzend"])){
            if(empty($_POST["login"])) {
                echo "naam is leeg";
            }
        }
    
    ?>
    </form>


</body>
</html>