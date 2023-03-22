<?php
$numbers = $_GET['numbers'];
$arr = explode(',', $numbers);
//$arr = array[8,65,5,32];
//index       [0][1][2][3].....
//count       (1)(2)(3)(4)....            

echo "Order in the beginning: $numbers\n";

// Your code here

for ($i = 0; $i < count($arr) - 1; $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$i] < $arr[$j]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
$arr_rev = array_reverse($arr);

$greatest_lowest = implode(',', $arr);
$lowest_greatest = implode(',', $arr_rev);

echo "From greatest to lowest: $greatest_lowest\n";
echo "From lowest to greatest: $lowest_greatest\n";
?>