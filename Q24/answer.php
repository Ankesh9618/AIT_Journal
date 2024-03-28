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
    $_SESSION["firstname"] = "Dr.Gregory";
    $_SESSION["lastname"] = "House";

    echo "Cuddy: The doctor will see you now....";
    ?>
    <a href="./answer2.php">Click here to meet your new Doctor.</a>
</body>
</html>