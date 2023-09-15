<?php
///////recursive function:

///////find factorial is the best example of recursive function




function factorial($n){
    if($n===0){
      return 1;
    }else{
        return ($n *factorial($n-1));////ya kud call karta hy apny ap ko
    }
}

echo factorial(4)

?>