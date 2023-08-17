<?php
//returns factorial of a given number
function factorial($number) {
    $factorial = 1;
    while($number > 0)
    {
        $factorial = $factorial * $number;
        $number--;
    }
    return $factorial;
}
//returns total routes of a given $rows*$columns grid
function gridRoutes($rows, $columns) {
    return factorial($rows + $columns)/(factorial($rows) * factorial($columns));
}

//Find number of routes of a given grid
//Execution starts here
//Initializing  row and column of a grid
$rows = 20;
$columns = 20;
echo("<br>Total routes of a $rows * $columns grid : ".gridRoutes($rows, $columns));