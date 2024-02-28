<?php
// golabl variable 
$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $c = $a + $b;
} 

Sum();
echo $b;


// Local variable 
    function local_var()  
    {  
        $num = 45;  //local variable  
        echo "Local variable declared inside the function is: ". $num;  
    }  
    local_var();  
 

?>