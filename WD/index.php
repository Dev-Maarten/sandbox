<?php

//var_dump($_SERVER)['document_root'];

//    commentaar wat ga ik hier doen?
/*
 * variabelen
 * string
 * float
 * integer -big int
 * boolean
 * array
 * object
 */
$greeting = 'hallo<br>';
echo $greeting;

// Float
$pie = 3.14;
echo $pie . "<br>";

// Integer
$int_var = 123456789;
echo $int_var . "<br>";

// Boolean
$boolean_var = true;

// Big int
$big_int_var = "123456789";

$fruits =['apple', 'banana', 'kiwi'];
// for, foreach, (do) while

    foreach ($fruits as $fruit) {
        echo$fruit . "<br>";
    }

//    for loop

// while loop

for ($x= 0; $x < count($fruits); $x++) {
    echo "the value of fruit is :" . $fruits[$x] . "<br>";

}

$i = 0;
while ($i < 5) {
    echo "value of $i is smaller then 5";
    $i++;
}