<?php
$string1 = trim($_GET["string1"]);
$string2 = trim($_GET["string2"]);

$total = strlen($string1) + strlen($string2);

$string1 = strip_tags("$string1");
$string2 = strip_tags("$string2");

if ($string1 == "" || $string2 == "") {
    echo "You didn't give both strings!";
} else {
    echo "The passed strings were \"$string1\" and \"$string2\". Their combined length is $total characters!";
}
?>