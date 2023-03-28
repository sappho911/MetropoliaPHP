<?php
$results = "results.txt";
if (!file_exists($results))
    die("File not found!");

$results_num = fopen($results, "r");

$nominee = $_GET["nominee"];

$temp = "";
$voices = 0;

while ($line = fgets($results_num, 1024)) {
    $rows = explode("|", $line);
    $voices = $voices + $rows[1];
    if ($rows[0] != $nominee) {
        $temp = $temp . $line;
    } else {
        $temp = $temp . $rows[0] . "|" . ($rows[1] + 1) . "\n";
    }
}

$voices++;

fclose($results_num);
$results_writing = fopen($results, "w");
fwrite($results_writing, $temp);
fclose($results_writing);

echo "Total votes: $voices ."

    ?>