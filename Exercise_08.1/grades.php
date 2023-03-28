<?php
$grades = "grades.txt";
$results = "results.txt";
if (!file_exists($grades))
    die("Grade is not found!");

$gradesReference = fopen($grades, "r");
$resultsReference = fopen($results, "w");

while ($line = fgets($gradesReference, 1024)) {
    if ($line == 5) {
        fwrite($resultsReference, (int) $line);
        fwrite($resultsReference, "\n");
    } else {
        fwrite($resultsReference, (int) ($line + 1));
        fwrite($resultsReference, "\n");
    }
}

fclose($gradesReference);
fclose($resultsReference);

$resultsReference = fopen($results, 'r');
echo "New grades:\n";
while ($line = fgets($resultsReference, 1024)) {
    echo "$line";
}
?>