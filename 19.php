<?php
/////function with return value :
function name($first,$last){
  $save= $first.$last;
  return $save;/////ya value ko return karde ga
}


echo name("hello","world <br>");


// now we calculate percentage:
function number($eng,$math,$urdu){
  $add=$eng+$math+$urdu;
  return $add;
}
echo number(20,60,90);////ya per hum ne sir value ko print karwaya hy 
echo "<br>";

$store=number(20,60,90);//////////yaha per humne function ki value ko return karwa kar ak new variable me store kia

function percentage($value){
   $per=$value/3;
   return $per;
}


echo percentage($store)/////passing varaible as a argument




?>