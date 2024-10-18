<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET ফর্ম উদাহরণ</title>
</head>

<body>
    <h1>GET ফর্ম</h1>
    <form method="get" action="get-form.php"> <!-- এখানে 'process.php' ফাইলটি তথ্য গ্রহণ করবে -->
        <label for="name">নাম:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">ইমেইল:</label>
        <input type="email" name="email" required><br><br>

        <input type="submit" value="পাঠান">
    </form>
</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") { // চেক করছে যে ফর্মটি GET পদ্ধতিতে পাঠানো হয়েছে
    if (isset($_GET['name']) && isset($_GET['email'])) { // ইনপুটগুলোর অস্তিত্ব চেক করা হচ্ছে
        $name = htmlspecialchars($_GET['name']); // ইনপুটের মান নিরাপদভাবে গ্রহণ করা হচ্ছে
        $email = htmlspecialchars($_GET['email']); // ইনপুটের মান নিরাপদভাবে গ্রহণ করা হচ্ছে

        // তথ্য দেখানোর জন্য
        echo "নাম: $name<br>";
        echo "ইমেইল: $email<br>";
    } else {
        echo "অনুগ্রহ করে সব ফিল্ড পূরণ করুন!";
    }
}
?>

