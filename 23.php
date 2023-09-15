<?php

// local and global variables


// local variable

function hello(){
    $r=10;/////local variable because humne function ka ander declare kia hy
    echo "the value of r in inside:$r <br>";
}
// echo "the value of r in outside:$r <br>";/////ya error de ga qk hhum isko function ka bahir access nahi karsakty

hello();
   


// GLOBAL VARIBALE:

$a=14;/////global variable

function printvalue(){
    echo "the value of a in inside:$a <br>";///you can not access in function 
    /////if you want to access global variable in function so you should use this:
    global $a;
    echo "the value of a in inside:$a <br>";

}
printvalue();
echo "the value of a in outside:$a <br>";




?>