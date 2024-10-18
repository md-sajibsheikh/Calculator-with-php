
 <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name']; // URL থেকে 'name' এর মান নিচ্ছে
        echo "Hello, $name!"; // আউটপুট: Hello, Alice!
    }
    ?>


 <form method="get" action="$_get.php">
     <label for="name">Name:</label>
     <input type="text" name="name">
     <input type="submit" value="Submit">
 </form>

 <!-- $_GET কী?
 $_GET হলো একটি সুপারগ্লোবাল ভেরিয়েবল যা URL-এ থাকা তথ্য গ্রহণ করতে ব্যবহৃত হয়। যখন তুমি একটি ফর্ম বা লিঙ্কের মাধ্যমে তথ্য পাঠাও এবং সেই তথ্য URL-এ যুক্ত হয়, তখন PHP সেই তথ্যকে $_GET-এর মাধ্যমে ধরতে পারে।

 কিভাবে কাজ করে
 ফর্ম তৈরি করা: প্রথমে তুমি একটি ফর্ম তৈরি করবে যেটি তথ্য পাঠাবে। ফর্মের method হবে get।
 html
 Copy code
 <form method="get" action="page.php">
     <label for="name">Name:</label>
     <input type="text" name="name">
     <input type="submit" value="Submit">
 </form>
 URL: যখন ব্যবহারকারী ফর্মটি পূরণ করে এবং পাঠায়, তখন URL-এর মধ্যে তথ্য যুক্ত হয়। উদাহরণস্বরূপ, যদি ব্যবহারকারী "Alice" নামটি দেয়, তাহলে URL হবে:
 bash
 Copy code
 example.com/page.php?name=Alice
 PHP-তে তথ্য গ্রহণ করা: এখন page.php ফাইলে তুমি $_GET ব্যবহার করে এই তথ্য ধরতে পারবে।
 php
 Copy code
 
 if (isset($_GET['name'])) {
        $name = $_GET['name']; // URL থেকে 'name' এর মান নিচ্ছে
        echo "Hello, $name!"; // আউটপুট: Hello, Alice!
    }
    
 কিভাবে এটি কাজ করে:
 $_GET['name'] ব্যবহার করে তুমি URL থেকে name প্যারামিটারটি গ্রহণ করছো।
 isset() ব্যবহার করে যাচাই করছো যে ব্যবহারকারী কিছু দিয়েছে কিনা।
 তারপর তুমি সেই তথ্যকে ব্যবহার করতে পারছো।
 উপসংহার
 $_GET ব্যবহার করে URL-এর মাধ্যমে তথ্য পাঠানো হয়, এবং এটি খুবই উপকারী যখন তুমি সহজ তথ্য, যেমন সার্চ কুয়ারি, পাঠাতে চাও।

 যদি আরও কিছু স্পষ্ট করতে চাও, বা অন্য কিছু জানার প্রয়োজন হয়, তাহলে জানাতে পারো! -->