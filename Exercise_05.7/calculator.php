<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$value = $_GET['operator'];
$operator = "";

$num1 = strip_tags($num1);
$num2 = strip_tags($num2);

if ($num1 == "" || $num2 == "") {
    echo "You didn't input both numbers!";
} else {
    switch ($value) {
        case "1":
            $result = $num1 + $num2;
            $operator = "+";
            break;
        case "2":
            $result = $num1 - $num2;
            $operator = "-";
            break;
        case "3":
            $result = $num1 * $num2;
            $operator = "*";
            break;
        case "4":
            $result = $num1 / $num2;
            $operator = "/";
            break;
    }
    echo "$num1 $operator $num2 = $result";
} //end of else
?>