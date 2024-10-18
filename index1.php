<?php

// echo"input first number: ";
// fscanf(STDIN,"%d", $a);
// echo "input secend number : ";
// fscanf(STDIN, "%d", $b);
// $z=$a+$b;
// echo $z;


// echo "input Celceas: ";
// fscanf(STDIN, "%d", $a);

// $farenhide = (5 / 9 * $a) + 32;

// printf("Celsius is: %d Farenheit is: %.2f", $a, $farenhide); 


// //PHP te printf() function use kore amra formatted output pabo. Jemon apnar udahorone apni Celsius er jonne %d (integer) ar Fahrenheit er jonne %.2f (float) format specifier use korechen.

// PHP te jodi apni printf() function use korun, tahole apni specific format er output pete parben. Dhori apnar kache Celsius ar Fahrenheit er value ache, ekhon apni jodi Celsius ke integer (e.g., 25) rakhte chan ar Fahrenheit ke point er pore 2 decimal (e.g., 77.00) dekhate chan, tahole apni printf() er modhye %d ar %.2f use korben.

// Jemon:

// printf("Celsius is: %d Farenheit is: %.2f", $a, $farenhide);
// Ekhane,
// %d use kora hoise integer rakhbar jonne, jar mane Celsius er value integer hisebe dekhabe.
// %.2f use kora hoise jeno Fahrenheit er value 2 decimal points porjonto thake.






// User theke input neya
$number1 = readline("First number: ");
$operator = readline("Choose an operator (+, -, *, /): ");
$number2 = readline("Second number: ");

// Conditional check kore operation chalano
switch ($operator) {
    case '+':
        $result = $number1 + $number2;
        break;
    case '-':
        $result = $number1 - $number2;
        break;
    case '*':
        $result = $number1 * $number2;
        break;
    case '/':
        // Zero division check
        if ($number2 != 0) {
            $result = $number1 / $number2;
        } else {
            echo "Division by zero is not allowed.";
            exit;
        }
        break;
    default:
        echo "Invalid operator.";
        exit;
}

// Output dekhano
printf("Result: %.2f\n", $result);
?>
