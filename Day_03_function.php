<?php

$variable_name = "Hello jamal ";

// function firstMessage() {
//     echo "Hello,Learner!";
//     echo "I hope you'ar enojing php";
// }
// firstMessage();

// function countdown() {
//     echo "4,3,2,1 &nbsp; &nbsp; ";
//     return "blastoff";

// }

// $return_value = countdown();
// echo $return_value;

// function returnFive() {
//     return "Hello ";
// }
// echo returnFive() . "Jamal";

//Returning NULL
function returnNothing() {
    echo "I'm runnig! I'm runnig";
}

// $result = returnNothing();

// echo null / 10;

// $num = 10;
// function scopes() {
//     // $num = 101;
//     global $num;
//     echo "I'm print value from inside: $num";
// }
// scopes();
// echo "<br/>", $num;

function myFun() {
    static $num = 0;
    echo $num . "<br/>";
    $num++;
}
myFun();
myFun();
myFun();