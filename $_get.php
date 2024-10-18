<?php
if (isset($_GET['name'])) {
    $name = $_GET['name']; // Getting the value of 'name' from the URL
    echo "Hello, $name!"; // Output: Hello, Alice!
}
?>

<form method="get" action="$_get.php">
    <label for="name">Name:</label>
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<!-- What is $_GET?
$_GET is a superglobal variable used to collect data from the URL. When you send data through a form or a link and that data is appended to the URL, PHP can capture that data via $_GET.

How it works:
1. Creating the Form: First, you create a form that will send the data. The form method will be "get".
   ```html
   <form method="get" action="page.php">
       <label for="name">Name:</label>
       <input type="text" name="name">
       <input type="submit" value="Submit">
   </form>

   if (isset($_GET['name'])) {
    $name = $_GET['name']; // Getting the value of 'name' from the URL
    echo "Hello, $name!"; // Output: Hello, Alice!
}
### Summary:
- The code checks if the `name` parameter is present in the URL when the form is submitted.
- If it is, it retrieves the value and displays a greeting message using that name.
- The explanation clarifies how the `$_GET` superglobal variable works, how forms send data via the URL, and how PHP can capture that data.



How it works:

You are retrieving the name parameter from the URL using $_GET['name'].
You check if the user has provided any input using isset().
Then, you can use that information.
Conclusion: Data is sent through the URL using $_GET, and it is very useful when you want to send simple information, such as search queries.

If you want to clarify anything further or need to know something else, feel free to ask!