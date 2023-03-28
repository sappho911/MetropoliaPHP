<?php
function newvalue(&$reference)
{
    echo "String value: $reference";
    $reference = "New string";
}


// Your code here

$str = "Default string\n";
newvalue($str);
echo "Value at the end: $str\n";

?>