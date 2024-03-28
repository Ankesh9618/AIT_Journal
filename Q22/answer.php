<?php 

$String= $_POST["string"];

echo "Reversing using strev(): <br>".strrev($String)."<br>";


echo "Reversing using for loop: <br>";
for($i=(strlen($String)-1);$i>=0;$i--){
    echo $String[$i];
}



?>