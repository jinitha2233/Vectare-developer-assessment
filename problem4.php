<?php
//returns the smallest positive number that is evenly divisible by all the numbers from 1 to n
function divisible($n){
    //loop to iterate numbers from 1 to the largest integer
    for($number=$n; $number<2147483647; $number++){
        $isDivisible = False;
        // loop to iterate divider from 2 till $n
        for($divider=2; $divider<=$n;$divider++){
            //check whether the number is evenly divisible by the divider
            if($number%$divider ==0 ){
                $isDivisible = True;
            }
            else {
                $isDivisible = False;
                break;//if the number is not divided by the divider then break the inner loop
            }
        }
        //set the divisible number if the $isDivisible is true and break the loop
        if($isDivisible) {
            return  $number;
        }
    }
}

//optimized method
//returns the smallest positive number that is evenly divisible by all the numbers from 1 to n
function divisibleOptimised($n){
    //loop to iterate numbers from 1 to the largest integer
    for($number=$n; $number<2147483647; $number=$number+$n){
        $isDivisible = False;
        // loop to iterate divider
        //divider starts from $n-1, which optimises run time
        for($divider=$n-1; $divider>=2;$divider--){
            if($number%$divider == 0 ){
                $isDivisible = True;
            }
            else {
                $isDivisible = False;
                break;
            }
        }
        if($isDivisible) {
            return $number;
        }
    }
}
//Execution starts here
//finding the smallest positive number that is evenly divisible by all of the
//numbers from 1 to n
//defining limit and the numbers
$n = 20;
//echo "<br>smallest divisible number : " .divisible($n);
echo "<br>smallest divisible number : " .divisibleOptimised($n);
