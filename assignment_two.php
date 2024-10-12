<!-- Assignment One -->

<?php

// function say_hello($_name): string
// {
//     return "Hello " . $_name;
// }

// $result = say_hello("Programmer");
// echo $result . "<br>";

?>

<!-- Assignment Two -->

<?php

// function add($first_number, $second_number): int
// {
//     return ($first_number + $second_number);
// }

// function subtract($first_number, $second_number): int
// {
//     return ($first_number - $second_number);
// }

// function multiply($first_number, $second_number): int
// {
//     return ($first_number * $second_number);
// }

// function calculate($first_number, $second_number)
// {
//     $add = add($first_number, $second_number);
//     $subtract = subtract($first_number, $second_number);
//     $multiply = multiply($first_number, $second_number);

//     echo "Addition Result: {$first_number} + {$second_number} = " . $add . "<br>";
//     echo "Subtraction Result: {$first_number} - {$second_number} = " . $subtract . "<br>";
//     echo "Multiplication Result: {$first_number} * {$second_number} = " . $multiply . "<br>";
// }

// calculate(10, 15);

?>

<!-- Assignment Three -->

<?php

// function get_result($_a, $_b, $_c, $_d): int
// {
//     return (($_a * $_b) - ($_c * $_d));
// }
// $result = get_result(1, 2, 3, 4);
// echo "Result: " . $result . "<br>";
?>

<!-- Assignment Four -->

<?php

// function get_result($first_number, $second_number): int
// {
//     return ($first_number % 10) + ($second_number % 10);
// }

// $result = get_result(13, 12);
// echo "Result: {$result} <br>";

?>

<!-- Assignment Four -->

<?php

// function check_number($_number): string
// {
//     if ($_number % 2 === 0)
//         return "Even";
//     return "Odd";
// }

// $result = check_number(3569);
// echo "Result: {$result} <br>";

?>

<!-- Assignment Five -->

<?php

// function get_result($_a, $_b, $_k): string
// {
//     if (($_a % $_k === 0) && ($_b % $_k === 0))
//         return "Both";
//     else if (($_a % $_k === 0) && ($_b % $_k !== 0))
//         return "Memo";
//     else if (($_a % $_k !== 0) && ($_b % $_k === 0))
//         return "Momo";
//     else
//         return "No One";
// }

// $result = get_result(15, 7, 3) . " Wins";
// echo "{$result} <br>";

// $result = get_result(22, 10, 2) . " Wins";
// echo "{$result} <br>";

?>

<!-- Assignment Six -->

<?php

// function check_lucky($_number): string
// {
//     $first_digit = $_number % 10;
//     $second_digit = ($_number / 10) % 10;
//     if ($first_digit % $second_digit === 0 || $second_digit % $first_digit  === 0)
//         return "YES";
//     return "NO";
// }

// echo check_lucky(39) . "<br>"; // YES
// echo check_lucky(82) . "<br>"; // YES
// echo check_lucky(79) . "<br>"; // NO
// echo check_lucky(43) . "<br>"; // NO

?>