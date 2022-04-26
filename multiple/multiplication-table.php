<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
    for($x=0; $x<=100; $x++){
        if($x==0){
            for($y=0; $y<=100; $y++){
                if($y==0){
                    echo "<td>  </td>";
                }
                else{
                    echo "<td> $y </td>";
                }
            }
        }
        else{
            echo "</tr>";
            for($y=0; $y<=100; $y++){
                if($y==0){
                    echo "<td> $x </td>";
                }
                else{
                    $p = $x * $y;
                    echo "<td> $p </td>";
                }
            }
        }
        echo "</tr>";
    }
    echo "</table>";

?>