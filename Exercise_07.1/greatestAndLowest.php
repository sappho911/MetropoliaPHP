<?php
$first = $_GET['first'];
$second = $_GET['second'];
$third = $_GET['third'];

// Your code here
function greatest($first, $second, $third)
{
    if ($first > $second && $first > $third) {
        return $first;
    } elseif ($second > $first && $second > $third) {
        return $second;
    } else {
        return $third;
    }
} // end of function greatest.
function lowest($first, $second, $third)
{
    if ($first < $second && $first < $third) {
        return $first;
    } elseif ($second < $first && $second < $third) {
        return $second;
    } else {
        return $third;
    }
} //end of function lowest


$greatest_num = greatest($first, $second, $third);
$lowest_num = lowest($first, $second, $third);

echo "Out of the given numbers, the greatest was $greatest_num";
echo " and the lowest $lowest_num";

?>