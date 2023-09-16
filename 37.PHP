<?php
//////array value its change assoative array to index array
$colour=[
    "a"=>"blue",
   "b" =>"pink",
   "c" =>"red",
];

$new=array_values($colour);
print_r($new);
echo "<br>";



//////arrry_unique();its return only unique value not duplicate
$colour=[
    "a"=>"blue",
   "b" =>"red",
   "c" =>"red",
];

$new=array_unique($colour);
print_r($new);


?>