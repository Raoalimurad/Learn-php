<?php
// FUNCTION WITH ARGUMENTS



// single parameter

function name($name){/////one parameter
    echo "hello $name how are you <br>";
}

name("RAO ALI MURAD");///////giving one argument


// two parameter 

function names($fname , $lname){        /////one parameter
    echo "hello $fname  $lname how are you <br>";
}

names("RAO","ALI MURAD");

// default parameters

function hello($first="hello",$last="world")//////set default parameter
{
    echo "hi  $first $last ";
}

hello()/////not giving arguments to this function



?>