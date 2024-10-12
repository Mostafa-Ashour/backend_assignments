<!-- Assignment One -->

<?php

// function print_numbers($_number)
// {
//     $i = 1;
//     while ($i <= $_number) {
//         echo $i . "<br>";
//         $i++;
//     }
// }

// print_numbers(5);
?>

<!-- Assignment Two -->

<?php

// function print_even_numbers($_number)
// {
//     if ($_number < 2) {
//         echo "-1<br>";
//         return;
//     }

//     for ($i = 2; $i <= $_number; $i += 2) {
//         echo $i . "<br>";
//     }
// }

// print_even_numbers(1);
// print_even_numbers(5);
// print_even_numbers(20);

?>

<!-- Assignment Three -->

<?php

// function get_max($_len, $_arr): int
// {
//     $maxi = 0;
//     for ($i = 0; $i < $_len; $i++) {
//         if ($_arr[$i] > $maxi)
//             $maxi = $_arr[$i];
//     }
//     return $maxi;
// }

// echo get_max(5, array(1, 8, 5, 7, 5)) . "<br>";

?>

<!-- Assignment Four -->


<?php

// function check_prime($_number): string
// {
//     if ($_number === 1)
//         return "NO";
//     elseif ($_number === 2)
//         return "YES";
//     for ($i = 2; $i * $i <= $_number; $i++) {
//         if ($_number % $i === 0)
//             return "NO";
//     }
//     return "YES";
// }

// echo check_prime(2) . "<br>";
// echo check_prime(1) . "<br>";
// echo check_prime(116) . "<br>";
// echo check_prime(11) . "<br>";

?>

<!-- Assignment Five -->

<?php

// function fun($_number)
// {
//     $str = strval($_number);
//     $rev_str = "";
//     for ($i = strlen($str) - 1; $i >= 0; $i--) {
//         $rev_str .= $str[$i];
//     }

//     echo (int)$rev_str . "<br>";
//     if ($rev_str === $str)
//         echo "YES<br>";
//     else
//         echo "NO<br>";
// }

// fun(12121);
// fun(160);

?>

<!-- Assignment Six -->

<?php

// function get_divisors($_number)
// {
//     $divisors = array();
//     for ($i = 1; $i * $i <= $_number; $i++) {
//         if ($_number % $i === 0) {
//             array_push($divisors, $i, $_number / $i);
//         }
//     }
//     sort($divisors);
//     return $divisors;
// }

// $divisors = get_divisors(12);
// echo "<pre>";
// print_r($divisors);
// echo "</pre>";

?>

<!-- Assignment Seven -->

<?php

// function check_lucky($_number): bool
// {
//     while ($_number > 0) {
//         $temp = $_number % 10;
//         if ($temp !== 4 && $temp !== 7)
//             return false;
//         $_number = (int)($_number / 10);
//     }
//     return true;
// }

// function result($first_number, $second_number)
// {
//     $result = [];
//     while ($first_number <= $second_number) {
//         if (check_lucky($first_number))
//             array_push($result, $first_number);
//         $first_number++;
//     }
//     if (empty($result) === true) {
//         echo "-1<br>";
//         return;
//     }
//     foreach ($result as $value) {
//         echo $value . "<br>";
//     }
// }

// result(8, 20);

?>

<!-- Assignment Eight -->

<?php

// function print_stars($_number)
// {
//     for ($i = 1; $i <= $_number; $i++) {
//         $empty_string = "";
//         for ($j = 1; $j <= $i; $j++) {
//             $empty_string .= "*";
//         }
//         echo $empty_string . "<br>";
//     }
// }

// print_stars(4);

?>