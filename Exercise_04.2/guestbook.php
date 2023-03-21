<?php
$name = $_GET["name"];
$msg = $_GET["msg"];

$name = strip_tags($name);
$msg = strip_tags($msg);

if ($name == "" and $msg == "") {
    echo "You didn't fill all fields!";
} else {
    echo $name . ": " . $msg;
}
?>