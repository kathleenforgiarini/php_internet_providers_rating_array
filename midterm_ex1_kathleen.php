<?php

include 'library_displayInternetRating.php';
include 'library_correctingRatings.php';
include 'library_calculateDisplayRatings.php';
include 'library_insertData.php';

// QUESTION NUMBER 1
$internetRating = array ("Bell" =>      array ("Maria" => 4, "Caty" => -4, "David" => 2, "Ali" => 3, "Roy" => 7),
                         "Videotron" => array ("Maria" => 3, "Caty" => 2, "David" => 4, "Ali" => -2, "Roy" => 1),
                         "Acanac" =>    array ("Maria" => 5, "Caty" => 2, "David" => 3, "Ali" => 4, "Roy" => 2),
                         "Bravo" =>     array ("Maria" => 4, "Caty" => 4, "David" => -3, "Ali" => 3, "Roy" => 2),
                         "Altima" =>    array ("Maria" => 5, "Caty" => 3, "David" => 4, "Ali" => 4, "Roy" => 5));

// QUESTION NUMBER 2
displayInternetRating($internetRating);

echo "<hr/>";

// QUESTION NUMBER 3
$correctedArray = correctInternetRating($internetRating);
displayInternetRating($correctedArray);

// QUESTION NUMBER 4
$calculatedArray = calculateRating($correctedArray);

echo "<hr/>";

// QUESTION NUMBER 5
displayCalcRating($calculatedArray);


// QUESTION NUMBER 6
insertData($calculatedArray);












