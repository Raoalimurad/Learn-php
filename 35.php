<?php
//////slice method()
$fruit1=["apple","banana","mango","grapes"];

array_slice($fruit1,1,3);

////         arrayname,start form,kahn tak



print_r($fruit1);
echo "<br>";


/////splice method() for delete in this case
$fruit1=["apple","banana","mango","grapes"];
array_splice($fruit1,1,2);
print_r($fruit1);
echo "<br>";

/////splice method() for replace and delete in this case:
 $fruit=["apple","banana","mango","grapes"];
$fruit2=["chikko",'lemon'];

array_splice($fruit,1,2,$fruit2);
print_r($fruit);




?>