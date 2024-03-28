<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $score = 0;
    $category = $scoreerr ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["score"])){
            $scoreerr="* Score is required";
        }else{
            $score= (int)$_POST["score"];
        }
        switch(true){
            case ($score == 0):
                $category = "AB";
                break;
            case ($score >=1 && $score<=10):
                $category = "PP";
                break;
            case($score >=11 && $score<=15):
                $category = "RT";
                break;
            case($score >=16 && $score<=20):
                $category = "GP";
                break;
            case($score >20 && $score<=25):
                $category = "O";
                break;
            case($score>25 || $score<0):
                $category="NA";
                break;
        }

        
    }
    ?>    


    <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h2>||View Your Grade||</h2>
    Enter Your score: <input type="text" name ="score" val="<?php echo $score;?>">
    <span name="scoreerr"><?php echo $scoreerr;?></span><br>
    <input type="submit" name = "submit" value="Submit">
    </form>
    <?php
    
    switch($category){
        case "AB":
            echo "You were Absent. Meet class co-ordinator";
            break;
        case "PP":
            echo "Your performance is poor. Solve whole paper again and submit.";
            break;
        case "RT":
            echo "You have scored less. Appear for a retest";
            break;
        case "GP":
            echo "You have done well. Can do better.";
            break;
        case "O":
            echo "Outstanding performance. Keep it up!";
            break;
        case "NA":
            echo "Please enter a valid score(range 0 to 25)";
            break;
    }
    ?>
</body>
</html>