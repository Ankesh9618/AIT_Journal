<?php
//Write a PHP program to check armstrong number.

function armstrongCheck($number){
    $sum = 0;  
    $x = $number;  
    while($x != 0)  
    {  
        $rem = $x % 10;  
        $sum = $sum + $rem*$rem*$rem;  
        $x = $x / 10;  
    }  
     
    // if true then armstrong number
    if ($number == $sum)
        return 1;
     
    // not an armstrong number    
    return 0;    
}
 

$number = (int)$_POST["number"];

$flag = armstrongCheck($number);
if ($flag == 1){
    echo "$number is Amstrong";
}else{
    echo "$number is not Amstrong";
}


?>