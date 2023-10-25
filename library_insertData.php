<?php
require_once 'dbconfig.php';

function insertData($arr) {
    global $connection;
    foreach ($arr as $key => $values) {
        $int_prov = $key;
        $total = $values['total'];
        $min = $values['min'];
        if ($min == ""){
            $min = null;
        }
        $max = $values['max'];
        if ($max == ""){
            $max = null;
        }
        
        $sqlStmt = "INSERT INTO t_rating (int_prov, tot_rat, min_rat, max_rat) VALUES ('$int_prov', $total, $min, $max)";
        $queryId = mysqli_query($connection, $sqlStmt);
        
        if ($queryId) {
            echo "Values for $key has been added successfully. <br/>";
        } else {
            echo "Error: " . mysqli_error($connection) . "<br/>";
        }
    }
    mysqli_close($connection);
}
