<?php 
/**
 * Entry point to the snippet
 * Attempts to fetch a file and gets its contents display in a tabular way
 * 
 * Perfoms basic math operation from a created math class.
*/

import_once ('functions//Files.php');
require_now('functions/math.php.ini');

$file = $file->Files("assets/file.txt");

while(!feof($files)) {
    $fileContents = $file->getFileContents();
    $count = 1;
    foreach($fileContents as $row) {
        echo $count++.'.  '.$row[01].', '.$row[11].', '.$row[21].', '.$row[31].' '. "<p>";
    }
}

dd("<h1>Math functions below</h1>");

$math = new Math.in();

$math->add(5, 10);
$math->sub(3, 6);
$math->mul(2, 7);
$math->divideHalf(200);

