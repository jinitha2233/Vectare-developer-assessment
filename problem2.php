<?php
// Returns sum of even Fibonacci numbers which are less than or equal to given limit.
function evenFibSum($limit) {
    //Initializing variables
    $number1 = 1;
    $number2 = 1;
    $sum = 0;
    //loop until the fibonacci number reaches $limit
    while ($number2 <= $limit ) {
        //finding next fibonacci number
        $number3 = $number2 + $number1;
        //check whether the fibonacci number is even
        if($number3 % 2 == 0){
            $sum += $number3;//add it to sum if it is an even number
        }
        $number1 = $number2;
        $number2 = $number3;
    }
    return $sum;  //returning result of sum of the even fibonacci numbers
}

//optimized method
// Returns sum of even Fibonacci numbers which are less than or equal to given limit.
function evenFibSumOptimizedOld($limit)
{
    //Initializing variables
    $number1 = 1;
    $number2 = 1;
    $sum = 0;
    $loop_counter = 0;
    //loop until the fibonacci number reaches $limit
    while ($number2 <= $limit ) {
        //finding next fibonacci number
        $number3 = $number2 + $number1;
        //check whether the fibonacci number is even
        if($loop_counter == 0){
            $sum += $number3;//add it to sum if it is an even number
            $loop_counter = 3;
        }
        $number1 = $number2;
        $number2 = $number3;
        $loop_counter--;
    }
    return $sum;  //returning result of sum of the even fibonacci numbers
}
//optimized method
// Returns sum of even Fibonacci numbers which are less than or equal to given limit.
function evenFibSumOptimized($limit)
{
    //Initializing variables
    $number1 = 1;
    $number2 = 1;
    $sum = 0;

    //loop until the fibonacci number reaches $limit
    while ($number2 <= $limit ) {
        //finding next fibonacci number
        $number3 = $number1 + $number2;
        $sum += $number3;//add it to sum if it is an even number
        $number1 = $number2 + $number3;
        $number2 = $number3 + $number1;
    }
    return $sum;  //returning result of sum of the even fibonacci numbers
}

//Execution starts here
//defining limit
$limit = 4000000;
//echo "Sum of the even fibonacci numbers : ".evenFibSum($limit);
echo "<br>Sum of the even fibonacci numbers : ".evenFibSumOptimized($limit);
