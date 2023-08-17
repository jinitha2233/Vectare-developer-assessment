<?php
//returns maximum total from top to bottom of a triangle in a text file
function triangleSum($filename){
    $file = fopen( $filename, "r" );
    $sum = 0;
    if($file) {
        $index = 0;
        //iterating through each line of a file
        foreach(file($filename) as $line) {
            //separating each numbers from the line and save it as an array
            $numbers = explode(" ", $line);
            if (count($numbers) > 2) { //if there are more than 2 numbers in a line, then increment index
                $index++;
            }
            //add the number to sum
            $sum = $sum + $numbers[$index];
        }
        fclose($file); //close the file
    }
    else {
        $sum = "There is no file or not a valid file";
    }
    //returning sum
    return $sum;
}
//Execution starts here
//Find the maximum total from top to bottom of a triangle in a text file
//defining limit and the numbers
$filename = "triangle.txt";
echo "<br>maximum total from top to bottom of a triangle is : ".triangleSum($filename);


