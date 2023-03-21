<?php
$num = $_GET["num"];

$num = strip_tags($num);

if ($num > 0) {
    if ($num % 2 == 0) {
        echo "$num is even.";
    } else {
        echo "$num is odd.";
    }

} else {
    echo "The input value is invalid!";
}

?>