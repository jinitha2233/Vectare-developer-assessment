<?php
//returns sum of multiples of $n1 or $n1 below $limit
function sumOfMultiplies($limit, $n1, $n2) {
    $sum = 0; //Initializing sum as 0
    for($number=$n1;$number<$limit;$number++) { //loop to iterate numbers from $n1 until $limit
        if(($number%$n1 == 0) || ($number%$n2 == 0)) { //Checking whether the number is a multiple of 3 or 5
            $sum+= $number; //addition of 3 or 5 multiplies
        }
    }
    return $sum; //returning result
}

//returns sum of multiples of $n1 or $n1 below $limit
function sumOfMultipliesOptimized($limit, $n1, $n2) {
    $sum = 0;//Initializing sum value as 0

    //Assign $n1 $n2 to another variable
    $number1 = $n1;
    $number2 = $n2;
    while($number1 < $limit){ //loop from $n1 till $limit
        $sum = $sum + $number1; //add $number1 to sum
        if($number2 < $limit){ // if $number2 is less than limit & $number2 is also not divisible by $n1, add it to sum
            if ($number2%$n1 != 0) { // this is to prevent numbers divisible by both numbers to be added twice
                $sum = $sum + $number2;
            }
            $number2 = $number2 + $n2;
        }
        $number1 = $number1 + $n1;
    }
    return $sum;
}

//Execution starts here
//Find the sum of all the multiples of two numbers below a specific limit.
//defining limit and the numbers
$limit = 1000;
$n1 = 3;
$n2 = 5;

//echo "<br>sum of all the multiples of $n1 or $n2  below $limit is :".sumOfMultiplies($limit, $n1, $n2); //print result sum of all the multiples of $n1 or $n2 below 1000
echo "<br>sum of all the multiples of $n1 or $n2  below $limit is :".sumOfMultipliesOptimized($limit, $n1, $n2); //print result sum of all the multiples of $n1 or $n2 below 1000