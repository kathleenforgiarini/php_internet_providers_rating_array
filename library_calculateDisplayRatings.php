<?php

function calculateRating($arr){
    $result = array();
    
    foreach ($arr as $key => $oneDim) {
        $total = 0;
        $min = null;
        $max = null;
        
        foreach ($oneDim as $value) {
            if ($value != "") {
                $total += $value;
                
                if ($min == null || $value < $min) {
                    $min = $value;
                }
                
                if ($max == null || $value > $max) {
                    $max = $value;
                }
            }
        }
        
        $result[$key] = array(
            "total" => $total,
            "min" => $min,
            "max" => $max
        );
    }
    
    return $result;
}

function displayCalcRating($arr){
    echo "<table border=1> <tr> <th> InternetProv </th> <th> Total </th> <th> Min </th> <th> Max </th> </tr>";
    foreach ($arr as $key=>$oneDim){
        echo "<tr><td> $key </td>";
        foreach ($oneDim as $v)
            echo "<td>$v";
    }
    echo "</tr></table>";
}