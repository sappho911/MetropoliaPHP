<?php

$numbers = $_GET['numarray'];
$numarray = explode(',', $numbers);

// Your code here

$points = implode(" ", $numarray);
$sum = 0;

foreach ($numarray as $value) {
    $sum += $value;
}
$avg = $sum / count($numarray);

echo "The points were: $points\n";
echo "Sum of points: $sum\n";
echo "Average of points: $avg";
?>