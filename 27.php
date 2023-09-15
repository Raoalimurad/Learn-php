<?php
  $emp=[
    [1,'rao',"web developer"],
    [2,'ali',"software developer"],
    [3,'murad',"manager"],
    [4,'faizan',"assistant"],
  ];


for($row=0; $row<4; $row++){
    for($col=0; $col<3; $col++){
        echo $emp[$row][$col]." ";
    }
    echo "<br>";
}




// PRINT THIS ARRAY IN THE FORM OF TABLE:
echo "<table border ='4px' cellspacing='0px'  cellpadding='7px'> ";
echo"<tr>
       <th>ID</th>
       <th>NAME</th>
       <th>FIELD</th>
       </th>";
foreach($emp as $row){
    echo "<tr>";
    foreach( $row as $col){
        echo "<td>$col </td>";
    }
    echo "</tr>";
}
echo "</table>";










echo "<pre>";
  print_r($emp);
  echo "</pre>";
?>