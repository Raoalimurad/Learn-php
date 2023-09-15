<?php

// for each loap with list function:
  $emp=[
    [1,'rao',"web developer"],
    [2,'ali',"software developer"],
    [3,'murad',"manager"],
    [4,'faizan',"assistant"],
  ];
  foreach($emp as list($id,$name,$profession))/////parameter ka nume ap kuch bi rak sakty ho jitny apki nested array ki index hogye uttny hy name rakny hogyr
  {
    echo "$id $name $profession <br>";
  }



  ?>