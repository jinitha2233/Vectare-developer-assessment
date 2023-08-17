<?php
//returns the largest palindrome made from the product of two n-digit numbers
function largestPalindrome($digits) {
    //Initializing upper limit and lower limit for single digit
    $upper_limit = 9;
    $lower_limit = 1;

    //finding upper and lower number in the given number of digit
    if ($digits >1) {
        $upper_limit = pow(10,$digits)-1;
        $lower_limit = pow(10,$digits-1);
    }

    $max_product = 0;
    //Check palindrome of product of all the two numbers between upper and lower limits
    for($i=$upper_limit; $i>=$lower_limit; $i--) {
        for($j=$i; $j>=$lower_limit; $j--){
            $product = $i * $j;
            $num = $product;
            $rev_num = 0;
            //using while loop to get the reverse number of the product
            while ($num > 1)
            {
                //calculation to get the reverse number of $num
                $rev_num = ($rev_num * 10) + ($num % 10);//get last digit each time
                $num = ($num / 10);
            }
            //checking whether the product is palindrome or not and whether the product is greater than previous $max_product
            if ($product == $rev_num && $product > $max_product) {
                $max_product = $product; //set the product as the max_product
            }
        }
    }
    return $max_product;
}
//Execution starts here
//defining digits
$digits = 3;
//function call
echo "The largest palindrome made from the product of two $digits-digit
numbers : ".largestPalindrome($digits);