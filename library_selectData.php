<?php
require_once 'dbconfig.php';

// QUESTION NUMBER 7

if (isset($_GET["provider"])) {
    global $connection;
    $provider = $_GET["provider"];
    $sqlStmt = "SELECT tot_rat, min_rat, max_rat FROM t_rating WHERE int_prov = '$provider'";
    $queryId = mysqli_query($connection, $sqlStmt);
    $count = mysqli_num_rows($queryId);
    if ($count > 0) {
        
        while ($rec=mysqli_fetch_array($queryId)){
            $tot_rat = $rec ["tot_rat"];
            $min_rat = $rec["min_rat"];
            $max_rat = $rec["max_rat"];
            
            echo "
            <form action='library_selectData.php' method='GET'>
            <label>Internet provider: </label>
            <input type='text' name='provider' id='provider' value='$provider'/><br/>
            <button type='submit'>Find</button><br/>
            <br/>
            </form>
            <table border='1'> <tr> <th> Min rating </th> <th> Max rating </th> <th> Total rating </th>
            <tr> <td> $min_rat </td> <td>$max_rat </td> <td> $tot_rat </td> </tr>
            </table>
            <br/>
            ";            
        }
    }
    else {
        echo "No providers found, try again: <br/><br/>
            <form action='library_selectData.php' method='GET'>
            <label>Internet provider: </label>
            <input type='text' name='provider' id='provider'/><br/>
            <button type='submit'>Find</button><br/>
            <br/>
            </form>
            ";
    }
}
else {
    echo "Search for a provider: <br/><br/>
            <form action='library_selectData.php' method='GET'>
            <label>Internet provider: </label>
            <input type='text' name='provider' id='provider'/><br/>
            <button type='submit'>Find</button><br/>
            <br/>
            </form>
            
            <br/>
            ";
}

?>

</html>