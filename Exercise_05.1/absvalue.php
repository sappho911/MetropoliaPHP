<?php
$num = $_GET["num"];

//$num = strip_tags("$num");
if ($num < 0) {
    $absvalue = -$num;
    echo "The absolute value of $num is $absvalue";
} else {
    echo "The absolute value of $num is $num";
}
?>