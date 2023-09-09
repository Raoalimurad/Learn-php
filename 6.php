<?php  
  
   ////LOGICAL OPERATORS;
   $a=10;
 $b= 5;


 ///this is AND logical example denoted by &&
 if($a > $b && $a==$b){
    echo "you are eligible";
 }else{
    echo "you are not eligible <br>";
 }

 ////this is OR  logical operator denoted by ||

 if($a > $b || $a==$b){
    echo "you are eligible";
 }else{
    echo "you are not eligible <br>";
 }


// logical not operator !


if(!($a > $b )){ /////jab apki condition correct hoto ya wrong bana detta hy
    echo "you are eligible";
 }else{
    echo "you are not eligible <br>";
 }


//  another one example of not operator

if(!($a < $b )){ /////jab apki condition wrong hoto ya correct  bana detta hy
    echo "you are eligible";
 }else{
    echo "you are not eligible";
 }





?>