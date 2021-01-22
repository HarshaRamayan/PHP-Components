<?php

$nameArray = array ("Sriharsha", "Sudheer", "Leela", "Anish", "Srikar","Twinkle");

    echo "<table>";

    $i=0;
    while($i<count($nameArray)){
    echo "<tr><td>".$nameArray[$i]." ". $nameArray[$i+1]. " ". $nameArray[$i+2]. "</tr></td>";
    $i = $i+3;
    }
    
    echo "</table>";


?>