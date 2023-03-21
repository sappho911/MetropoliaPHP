<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

$result = $num1 * $num2;
//$num1 = strip_tags("$num1");
//$num2 = strip_tags("$num2");
echo "Product: $result\n";

if ($num2 != 0) {
    $quotient = $num1 / $num2;
    echo "Quotient: $quotient";
} else {
    echo "Quotient: can't divide by zero";
}
?>