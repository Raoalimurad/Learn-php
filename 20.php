<?php
//
function withvalue($value){
    $value+=5;/////yaha per value me 5 add kia 

}
$str=10;/////varaible me value assign ki
withvalue($str);///passing varibale as a argument
echo $str ."<br>";//////iski value change nahi howe  qk $str ne apny copy bana kar $value ko send jiski waja se iski orignal value per koi farq nahi para




// function argument with refernce   its symbol is &


function withRefernce(&$value){
    $value+=5;/////yaha per value me 5 add kia 

}
$str=10;/////varaible me value assign ki
withRefernce($str);//////iski value change  hode  qk $str ne apny orignal address agye send kia  jiski waja se $str ki value change hogye 
echo $str;///value change ho jaew gye because of his refernce address &

?>