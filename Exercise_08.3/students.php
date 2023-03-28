<?php

$students = "students.txt";
if (!file_exists($students))
    die('File not found!');

$students_reference = fopen($students, "r");
$student = $_GET['student'];
$find = false;

while ($line = fgets($students_reference, 1024)) {
    $parserow = explode("|", $line);
    if ($parserow[0] == $student) {
        $find = true;
        if ($parserow[2] == 1) {
            echo $parserow[1] . "($parserow[0]): attending";

        } else {
            echo $parserow[1] . "($parserow[0]): not attending";
        }
    }
}

if (!$find) {
    echo "The provided number did not match a student!";
}

fclose($students_reference);

?>