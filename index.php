<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-80">
        <h1 class="text-2xl font-bold text-center mb-6">PHP Calculator</h1>
        <form method="POST" class="space-y-4">
            <input type="number" step="0.01" name="num1" placeholder="First number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" required>
            <input type="number" step="0.01" name="num2" placeholder="Second number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" required>
            <div class="flex justify-around mt-4">
                <button type="submit" name="operator" value="+" class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">+</button>
                <button type="submit" name="operator" value="-" class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">-</button>
                <button type="submit" name="operator" value="*" class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">*</button>
                <button type="submit" name="operator" value="/" class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">/</button>
                <button type="submit" name="operator" value="%" class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">%</button>
            </div>
            <div class="text-center mt-4 text-xl font-bold text-purple-600">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $num1 = (float)$_POST['num1'];
                    $num2 = (float)$_POST['num2'];
                    $operator = $_POST['operator'];
                    $result = 0;

                    if ($operator == '+') {
                        $result = $num1 + $num2;
                    } elseif ($operator == '-') {
                        $result = $num1 - $num2;
                    } elseif ($operator == '*') {
                        $result = $num1 * $num2;
                    } elseif ($operator == '/') {
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            $result = "Cannot divide by zero";
                        }
                    } elseif ($operator == '%') {
                        if ($num2 != 0) {
                            $result = $num1 % $num2;
                        } else {
                            $result = "Cannot divide by zero";
                        }
                    } else {
                        $result = "Invalid operator";
                    }
                    if (is_numeric($result)) {
                        printf("Result: %.2f", $result);
                    } else {
                        echo htmlspecialchars($result);
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>