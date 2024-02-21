<?php
$studentScore = 75;
if ($studentScore >= 90) {
    $grade = 'A';
} elseif ($studentScore >= 80) {
    $grade = 'B';
} elseif ($studentScore >= 70) {
    $grade = 'C';
} elseif ($studentScore >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}
echo "Student's Score: " . $studentScore . "\n";
echo "Grade: " . $grade . "\n";

?>