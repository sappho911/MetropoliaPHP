<?php
$hours = $_GET["hours"];
$hourlypay = $_GET["hourlypay"];
$taxperc = $_GET["taxperc"];

$hours = strip_tags($hours);
$hourlypay = strip_tags($hourlypay);
$taxperc = strip_tags($taxperc);

if ($hours == "") {
    echo "Not all fields filled!";
} elseif ($hourlypay == "") {
    echo "Not all fields filled!";
} elseif ($taxperc == "") {
    echo "Not all fields filled!";
} else {
    $withOutTax = $hours * $hourlypay;
    $tax = $hours * $hourlypay * $taxperc / 100;
    $withTax = $withOutTax - $tax;

    echo "Salary without taxes: $withOutTax \n";
    echo "Amount of tax: $tax \n";
    echo "Salary after taxes: $withTax\n";
}

?>