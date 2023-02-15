<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $myfile = fopen("nieuw_document2.txt", "w") or die("Unable to open file");
    $txt = "Jan peters \n";
    fwrite($myfile, $txt);
    $txt = "An peters \n";
    fwrite($myfile, $txt);
    fclose($myfile)
    ?>
</body>
</html>