<?php
function displayInternetRating($arr){
    echo "<table border=1> <tr> <th> Clients / Internet Providers </th> <th> Maria </th> <th> Caty </th> <th> David </th> <th> Ali </th> <th> Roy </th> </tr>";
    foreach ($arr as $key=>$oneDim){
        echo "<tr><td> $key </td>";
        foreach ($oneDim as $v)
            echo "<td>$v";
    }
    echo "</tr></table>";
}