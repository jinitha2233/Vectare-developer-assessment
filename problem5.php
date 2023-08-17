<?php
//returns nth prime number
function primeNumber($nth) {
    //Initializing an array with first prime number
    $prime_numbers = [2];
    $number = 3;

    while (count($prime_numbers) < $nth) { //loop until we have the nth prime number
        $is_prime = False;
        for($divider=2; $divider<$number;$divider++) { //starting from 2 loop until $divider is less than the number being processed
            if($number%$divider != 0) {
                $is_prime = True;
            }
            else {
                $is_prime = False;
                break;
            }
        }
        if($is_prime) {
            //adding prime number into the array
            array_push($prime_numbers,$number);
        }
        $number++;
    }
    //returning nth prime number
    return $prime_numbers[$nth-1];
}

//returns nth prime number
function primeNumberOptimized($nth)
{
    //Initializing variables with the first prime numbers
    $prime_numbers = [2,3];
    $number = 4;

    while (count($prime_numbers) < $nth) { //loop until we have the nth prime number
        $is_prime = False;
        foreach ($prime_numbers as $divider) { //loop through all prime numbers found so far
            if($divider <= sqrt($number)){ //only process further if the divider is less than or equal to the Square root of the number
                if ($number % $divider != 0) {
                    $is_prime = True;
                } else {
                    $is_prime = False;
                    break;
                }
            }
            else {
                break;
            }
        }
        if ($is_prime) { //if the number is prime, push it into the array of prime numbers
            array_push($prime_numbers, $number);
        }
        $number++;
    }
    return $prime_numbers[$nth - 1];
}

//Execution starts here
//Find nth prime number
//defining limit and the numbers
$nth = 10001;
//echo "<br>$nth prime number : " .primeNumber($nth);
echo "<br>$nth prime number : " .primeNumberOptimized($nth);
