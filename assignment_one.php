<!-- 1. Reverse a String
Problem:
Write a PHP function to reverse a given string without using built-in functions.

input:
Hello World!
Welcome Backend 31

Output:
!dlroW olleH
13 dnekcaB emocleW -->

<?php
// solution...

// $word = "Welcome Backend 31";

// function reverse_string($_word) : string
// {
//     $result = "";
//     for ($i = (strlen($_word) - 1); $i >= 0; $i--)
//         $result .= $_word[$i];
//     return $result;
// }

// $result = reverse_string($word);
// echo $result . "<br>";
?>


<!-- =============================================================== -->
<!-- =============================================================== -->


<!-- 2. Check if a Number is Prime
Problem:
Write a PHP function to check whether a number is prime without using built-in functions.

input:
7
3
12

Output:
prime
prime
Not Prime -->

<?php
// solution...

// $number = 12;

// function check_prime($_number): bool
// {
//     for ($i = 2; ($i * $i) <= $_number; $i++) {
//         if ($_number % $i === 0)
//             return true; // Return True If Not Prime
//     }
//     return false; // Return False If Prime
// }

// $result = (check_prime($number) ? "Not Prime" : "Prime");
// echo $result . "<br>";

?>


<!-- =============================================================== -->
<!-- =============================================================== -->


<!-- 3. Factorial of a Number
Problem:
Write a PHP function to calculate the factorial of a number without using recursion or built-in functions.

input:
5
8

Output:
120
40320 -->

<?php
// solution...

// $number = 8;

// function factorial($_number): int
// {
//     $result = 1;
//     for ($i = 2; $i <= $_number; $i++)
//         $result *= $i;
//     return $result;
// }

// $result = factorial($number);
// echo $result . "<br>";

?>


<!-- =============================================================== -->
<!-- =============================================================== -->


<!-- 4. Check if a String is a Palindrome
Problem:
Write a PHP function to check whether a given string is a palindrome without using built-in functions.

input:
madam
hidden
civic

Output:
Palindrome
Not Palindrome
Palindrome -->

<?php
// solution...

// $word = "civic";

// function check_palindrome($_word): bool
// {
//     for ($i = 0, $j = (strlen($_word) - 1); $i < $j; $i++, $j--) {
//         if ($_word[$i] !== $_word[$j])
//             return false; // Return False If Not Palindrome
//     }
//     return true; // Return True if Palindrome
// }

// $result = (check_palindrome($word) ? "Palindrome" : "Not Palindrome");
// echo $result . "<br>";

?>


<!-- =============================================================== -->
<!-- =============================================================== -->


<!-- 5. Sum of Digits in a Number
Problem:
Write a PHP function to calculate the sum of digits of a given number without using built-in functions.

input:
12348
9254

output:
18
20 -->

<?php
// solution...

// $number = 123456789;

// function sum_of_digits($_number): int
// {
//     $result = 0;
//     $temp_number = $_number;

//     while ($temp_number > 0) {
//         $temp = $temp_number % 10;
//         $temp_number /= 10;
//         $result += $temp;
//     }
//     return $result;
// }

// $result = sum_of_digits($number);
// echo $result . "<br>";

?>


<!-- =============================================================== -->
<!-- =============================================================== -->

<!-- 6. Check if a Number is Even or Odd
Problem:
Write a PHP function to check if a number is even or odd without using built-in functions.
input:
12
5

output:
Even
Odd -->

<?php
// solution...

// function check_state($_number): bool
// {
//     return ($_number % 2);
// }

// $number = 5;
// $result = (check_state($number) ? "Odd" : "Even");
// echo $result . "<br>";

?>


<!-- =============================================================== -->
<!-- =============================================================== -->


<!-- 7. Find the Maximum Value in an Array
Problem:
Write a PHP function to find the maximum value in an array without using built-in functions.

input:
array(1, 5, 9, 3, 7)
array(6, 2, 4, 14, 5)

output:
9
14 -->

<?php
// solution...

// function get_maximum_element($_arr): int
// {
//     $maxi = 0;
//     foreach ($_arr as $element) {
//         if ($element > $maxi)
//             $maxi = $element;
//     }
//     return $maxi;
// }

// $arr = array(6, 2, 4, 14, 5);
// $result = get_maximum_element($arr);
// echo $result . "<br>";

?>


<!-- =============================================================== -->
<!-- =============================================================== -->


<!-- 8. Remove Duplicates from an Array
Problem:
Write a PHP function to remove duplicate values from an array without using built-in functions.

input:
array(1, 2, 2, 3, 4, 4, 5)
array(6, 6, 5, 4, 12, 12, 52, 1);

output:
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
Array ( [0] => 6 [1] => 5 [2] => 4 [3] => 12 [4] => 52 [5] => 1 ) -->


<?php
// solution...

// function remove_duplicates($_arr): array
// {
//     $freq_array = [];
//     $result = [];
//     foreach ($_arr as $value) {
//         if (isset($freq_array[$value]) === true)
//             continue;
//         $freq_array[$value] = true;
//         array_push($result, $value);
//     }
//     return $result;
// }

// $arr = array(6, 2, 12, 1, 5, 6, 1, 4, 2,  12, 52, 1);
// $result = remove_duplicates($arr);

// echo "<pre>";
// print_r($result);
// echo "</pre>";

?>