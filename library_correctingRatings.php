<?php
function correctInternetRating($arr){
    foreach ($arr as $key=>$oneDim) {
        foreach ($oneDim as $k => $value){
            if ($value < 1 || $value > 5){
                $arr[$key][$k] = "";
            }
        }
    }
    return $arr;
}