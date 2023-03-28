<?php
$string = $_GET["string"];
$mode = $_GET["mode"];
$printing = "";

switch ($mode) {
    case "1":
        $temp = strtolower($string);
        $length = strlen($temp);
        $printing = "";
        for ($i = 0; $i < $length; $i++) {
            if ($i == ($length - 1)) {
                $printing = $printing . $temp[$i];
            } else {
                $printing = $printing . $temp[$i] . " ";
            }
        }
        break;
    case "2":
        $temp = strtoupper($string);
        $length = strlen($temp);
        $printing = "";
        for ($i = 0; $i < $length; $i++) {
            if ($i == ($length - 1)) {
                $printing = $printing . $temp[$i];
            } else {
                $printing = $printing . $temp[$i] . " ";
            }
        }
        break;
    case "3":
        $printing = strtolower($string);
        $printing = strrev($printing);
        break;
    case "4":
        $printing = strtoupper($string);
        $printing = strrev($printing);
        break;
}
echo $printing;
?>