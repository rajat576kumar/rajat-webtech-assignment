<?php
function determineFitnessLevel($steps) {
    if ($steps < 5000) {
        return 'Beginner';
    } elseif ($steps >= 5000 && $steps <= 10000) {
        return 'Intermediate';
    } else {
        return 'Advanced';
    }
}

// Example usage
$numberOfSteps = 7500;
$fitnessLevel = determineFitnessLevel($numberOfSteps);
echo "Number of Steps: " . $numberOfSteps . "\n";
echo "Fitness Level: " . $fitnessLevel . "\n";

?>