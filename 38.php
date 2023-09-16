<?php
/////arrray_sum()function
$sum=[10,12,14,42];
echo "the sum of this array is".array_sum($sum)."<br>";
//////array_product():
$product=[10,12,14,42];
echo "the product of this array is".array_product($product)."<br>";

////array_shuffle()
$shuffles=["ali","rao","murad","nahel"];

shuffle($shuffles);


print_r($shuffles);
echo "<br>";


/////array random()
$rand=["ali","rao","murad","nahel"];
 $stor=array_rand($rand);
print_r($stor);////ya random index genertare kare ga
print_r($stor,2);///y length dallny ki wajs se uski lenght ka according value de ga




?>