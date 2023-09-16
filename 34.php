<?php
/////////merge() method:
$fruit1=["apple","banana","mango","grapes"];
$fruit2=["lemon","chikko","watermelon"];
$merge=array_merge($fruit1,$fruit2);
print_r($merge);
echo "<br>";


/////combine method();
$fruit1=["apple","banana","mango"];
$fruit2=["lemon","chikko","watermelon"];
$combine=array_combine($fruit1,$fruit2);



print_r($combine);

?>