# PHP Unexpected Array Summation

This repository demonstrates an uncommon error in PHP related to the loose typing of the language when performing arithmetic operations on arrays containing mixed data types (integers and strings). The `bug.php` file contains a function that calculates the sum of an array. However, if the array contains non-numeric values, the function will produce unexpected results because PHP will try to implicitly type cast non-numeric values to numbers.

The `bugSolution.php` file shows a corrected version that explicitly handles non-numeric values for more robust and predictable behavior. The solution improves the code by explicitly checking the data type of the array elements before performing the addition.