<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
 echo "<table>";
 #print header
 echo "<tr>";
 echo "<th><th>";
 for($i = 1; $i <= 100; $i++)
 {
     echo "<th>$i<th>";
 }
 echo "</tr>";
 #print table data
 for($j = 1; $j <= 100; $j++)
 {
    echo "<tr>";
    echo "<th>$j<th>";
    for($i = 1; $i <= 100; $i++)
    {
        $x = $i*$j;
        echo "<th>$x<th>";
    }
    echo "</tr>";
}
 echo "</table>";
?>