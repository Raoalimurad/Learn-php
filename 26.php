<?php
// for each loap

// for each loap with array:
$fruit=['mango','apple','banana','grapes'];
foreach($fruit as $value){
    echo $value."<br>";////print each value of loap
}






// for each loap with associative array
$about=array(
    "name"=>"ali",
    "age"=>19,
    "salary"=>350.98,
);

foreach($about as $key=>$value){
    echo "$key=$value <br>";///print key and value both of array
}

?>