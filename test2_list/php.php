<?php
   $numbers = array (12, 17, 4, 6, 1, 3, 9, 15, 7, 11);  
    sort($numbers);
    $arrlength = count($numbers);
    echo "<table style='border-style: solid; border-width: 1px;border-spacing: 0px;'><tr><th style='border-style: solid;border-width: 1px;border-spacing: 0px;'>ID</th><th style='border-style: solid;border-width: 1px;border-spacing: 0px;'>Quantity</th></tr>";

    for($i = 1; $i < $arrlength+1; $i++) {
        echo "<tr>"."<td style='border-style: solid;border-width: 1px;border-spacing: 0px;'>".$i."</td>";
        echo "<td style='border-style: solid;border-width: 1px;border-spacing: 0px;'>".$numbers[$i-1]."</td>"."</tr>";
    }
    echo "<tr>"."<td style='border-style: solid;border-width: 1px;border-spacing: 0px;'>".""."</td>";
        echo "<td style='border-style: solid;border-width: 1px;border-spacing: 0px;'>"."Total: ".array_sum($numbers)."</td>"."</tr>";
    echo "</table>";
?>