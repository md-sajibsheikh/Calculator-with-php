 <!-- Basic if Statement:
 The if statement checks a condition, and if it's true, it executes the code inside it.

 php
 code -->
 <?php
    $x = 5;

    if ($x > 3) {
        echo "x is greater than 3";
    }
    ?>
 <!-- In this case, since $x is 5, the output will be "x is greater than 3".

 2. Using else and elseif:
 You can use else to execute a block of code if the if condition is false, and elseif to check multiple conditions.

 php
 code -->
 <?php
    $x = 5;

    if ($x > 10) {
        echo "x is greater than 10";
    } elseif ($x == 5) {
        echo "x is equal to 5";
    } else {
        echo "x is less than 5";
    }
    ?>
 <!-- In this example, the first condition ($x > 10) is false, so it checks the next condition ($x == 5), which is true, so it will output "x is equal to 5". -->

 <!-- 3. Ternary Operator:
 The ternary operator is a shorthand for if-else. Its syntax is:

 php
 code

 condition ? value_if_true : value_if_false;

 php
 code -->
 <?php
    $x = 5;
    echo ($x > 3) ? "x is greater than 3" : "x is less than or equal to 3";
    ?>
 <!-- Here, since $x is 5, the output will be "x is greater than 3" because the condition $x > 3 is true.

 4. Switch Statement:The switch statement matches a variable against multiple possible values
 and executes the code for the matching case.

 php -->

 <?php
    $day = "Monday";

    switch ($day) {
        case "Monday":
            echo "Start of the workweek";
            break;
        case "Tuesday":
            echo "Second day of the week";
            break;
        case "Wednesday":
            echo "Midweek";
            break;
        default:
            echo "Weekend!";
    }
    ?>
 <!-- Here, since $day is "Monday", the output will be "Start of the workweek".
 The break statement ensures that the code doesn't continue to other cases once a match is found.

 Key Concepts Recap:

 if: Checks a condition and executes the code if it is true.
 elseif: Checks another condition if the first if is false.
 else: Executes the code if none of the previous conditions are true.
 Ternary Operator: A shorthand for if-else with a concise syntax.
 switch: Allows matching a variable against multiple cases to execute different blocks of code. -->