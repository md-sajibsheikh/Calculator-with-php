<?php
$globalVar = "I am global";

function testGlobal()
{
    global $globalVar;

    $local = "I am local";
    echo $globalVar; // এখন এটি কাজ করবে
    echo $local; // এখন এটি কাজ করবে
}

testGlobal();







// $globalVar = "I am global"; // গ্লোবাল ভেরিয়েবল

// function testScope() {
//     $localVar = "I am local"; // লোকাল ভেরিয়েবল
//     echo $localVar; // এটি কাজ করবে
// }

// testScope();
// echo $globalVar; // এটি কাজ করবে
// echo $localVar; // এটি কাজ করবে না, কারণ এটি লোকাল ভেরিয়েবল


// <?php
// $globalVar = "I am global";

// function testGlobal() {
//     global $globalVar;
//     echo $globalVar; // এখন এটি কাজ করবে
// }

// testGlobal();
// 
