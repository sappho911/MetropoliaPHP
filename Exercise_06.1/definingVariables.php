<?php
// Your code here
$text = "Special characters marked with a backslash (\\) can be used inside quotation marks (\" and \").\n";
$count = 3;
$animal = "cat";
$a = array(9, 7, 5);


$output = implode(",", $a);
echo $text;
echo "I bought $count {$animal}s.\n";
echo "Array content: $output";
?>