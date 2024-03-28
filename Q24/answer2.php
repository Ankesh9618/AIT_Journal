<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "Cuddy: Name of your doctor is ".$_SESSION["firstname"]." ".$_SESSION["lastname"];
    echo "<br>"."Dr.House : Its a pleasure to meet you.";
    ?>
</body>
</html>