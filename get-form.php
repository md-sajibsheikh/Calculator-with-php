<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Form Example</title>
</head>

<body>
    <h1>GET Form</h1>
    <form method="get" action="get-form.php"> <!-- Here, the 'process.php' file will receive the data -->
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") { // Checking if the form is submitted using the GET method
    if (isset($_GET['name']) && isset($_GET['email'])) { // Checking the existence of inputs
        $name = htmlspecialchars($_GET['name']); // Safely getting the input value
        $email = htmlspecialchars($_GET['email']); // Safely getting the input value

        // Displaying the information
        echo "Name: $name<br>";
        echo "Email: $email<br>";
    } else {
        echo "Please fill in all fields!";
    }
}
?>


<!-- 
Explanation:
This code is an HTML form that takes a name and an email using the GET method.
When the form is submitted, it directs to get-form.php where the PHP code checks if the request method is GET and if the fields are set.
It then safely retrieves the name and email using htmlspecialchars() to prevent XSS (Cross-Site Scripting) attacks and displays them.
If either field is not filled, it prompts the user to fill in all fields. -->