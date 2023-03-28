<?php
$students = "exam.txt";
if (!file_exists($students))
    die("File not found!");

$students_reference = fopen($students, "r");

$howManyStudents = 0;
$summa = 0;

while ($line = fgets($students_reference, 1024)) {
    $howManyStudents++;
    $parserow = explode("|", $line);
    $stsumma = 0;
    for ($i = 1; $i <= 5; $i++) {
        $stsumma += $parserow[$i];
        $summa += $parserow[$i];
    }
    $result["$parserow[0]"] = $stsumma;
}
fclose($students_reference);
$average = $summa / $howManyStudents;
echo "There were $howManyStudents students:\n";

foreach ($result as $key => $value) {
    echo "$key: $value points\n";
}
echo "The point average was $average points.";
?>