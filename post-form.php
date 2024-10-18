<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <h1>রেজিস্ট্রেশন ফর্ম</h1>
    <form method="post" action="post-form.php">
        <label for="name">নাম:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">ইমেইল:</label>
        <input type="email" name="email" required><br><br>

        <label for="phone">ফোন নম্বর:</label>
        <input type="text" name="phone" required><br><br>

        <label for="password">পাসওয়ার্ড:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="পাঠান">
    </form>
</body>

</html>
<?php


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])) {
    // চেক করছে যে সমস্ত ইনপুট আছে কিনা
    $name = $_POST['name']; // ফর্ম থেকে নাম নিচ্ছে
    $email = $_POST['email']; // ফর্ম থেকে ইমেইল নিচ্ছে
    $phone = $_POST['phone']; // ফর্ম থেকে ফোন নম্বর নিচ্ছে
    $password = $_POST['password']; // ফর্ম থেকে পাসওয়ার্ড নিচ্ছে

    // তথ্য দেখানোর জন্য
    echo "নাম: $name<br>";
    echo "ইমেইল: $email<br>";
    echo "ফোন নম্বর: $phone<br>";
    echo "password: $password<br>";
    // পাসওয়ার্ড সাধারণত সরাসরি দেখানো হয় না
}












// কোড বিশ্লেষণ
// php
// Copy code
// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") { // চেক করছে যে ফর্মটি POST পদ্ধতিতে পাঠানো হয়েছে

//     $name = $_POST['name']; // ফর্ম থেকে নাম নিচ্ছে
//     $email = $_POST['email']; // ফর্ম থেকে ইমেইল নিচ্ছে
//     $phone = $_POST['phone']; // ফর্ম থেকে ফোন নম্বর নিচ্ছে
//     $password = $_POST['password']; // ফর্ম থেকে পাসওয়ার্ড নিচ্ছে

//     // তথ্য দেখানোর জন্য
//     echo "নাম: $name<br>";
//     echo "ইমেইল: $email<br>";
//     echo "ফোন নম্বর: $phone<br>";
//     // পাসওয়ার্ড সাধারণত সরাসরি দেখানো হয় না
// }
// 
// ব্যাখ্যা
// $_SERVER["REQUEST_METHOD"]:
// এটি একটি সুপারগ্লোবাল ভেরিয়েবল যা জানায় যে পৃষ্ঠাটি কিভাবে অ্যাক্সেস করা হয়েছে। এখানে আমরা চেক করছি যে এটি POST পদ্ধতিতে পাঠানো হয়েছে কিনা।
// যদি ফর্মটি POST পদ্ধতিতে পাঠানো হয়, তাহলে পরবর্তী কোডটি চলবে।
// $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['password']:

// এগুলো হলো ফর্মের ইনপুট ফিল্ডগুলোর মান। যখন ব্যবহারকারী ফর্ম পূরণ করে এবং পাঠায়, তখন এই মানগুলি $_POST অ্যারে-তে সংরক্ষিত হয়।
// এখানে আমরা প্রত্যেকটি ইনপুট ফিল্ডের মান পৃথক ভেরিয়েবলে সংরক্ষণ করছি।
// echo ফাংশন:

// এই ফাংশনটি ব্যবহার করে আমরা ব্যবহারকারীর দেওয়া নাম, ইমেইল এবং ফোন নম্বর প্রদর্শন করছি।
// পাসওয়ার্ড সাধারণত সরাসরি দেখানো হয় না, তাই সেটি আউটপুটে নেই।
// গুরুত্বপূর্ণ পয়েন্ট
// নিরাপত্তা: পাসওয়ার্ড এবং অন্যান্য তথ্য সুরক্ষিত রাখার জন্য, এটি গুরুত্বপূর্ণ যে সেগুলি সরাসরি প্রদর্শন না করা হয়। পাসওয়ার্ড সাধারণত নিরাপদে হ্যাশ করা উচিত এবং ব্যবহারকারীকে কখনও সরাসরি দেখানো উচিত নয়।

// ভ্যালিডেশন: ফর্মের ইনপুটগুলি যাচাই করা গুরুত্বপূর্ণ, যেন সঠিক এবং সম্পূর্ণ তথ্য পাওয়া যায়।

// সারসংক্ষেপ
// এই কোডটি একটি ফর্ম থেকে তথ্য গ্রহণ করে এবং তা প্রদর্শন করে। এটি সাধারণত রেজিস্ট্রেশন বা লগইন ফর্মের জন্য ব্যবহার করা হয়।