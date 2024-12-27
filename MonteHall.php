<?php

function montyHallSimulation($numTrials = 10000) {
    $switchWins = 0;
    $stayWins = 0;

    for ($i = 0; $i < $numTrials; $i++) {
        // Randomly place the car behind one of the doors (0, 1, 2)
        $carPosition = rand(0, 2);

        // Contestant makes an initial random choice
        $initialChoice = rand(0, 2);

        // Monty opens a door with a goat (not the car or the initial choice)
        $montyChoice = null;
        for ($door = 0; $door < 3; $door++) {
            if ($door !== $carPosition && $door !== $initialChoice) {
                $montyChoice = $door;
                break;
            }
        }

        // Determine the remaining door
        $remainingDoor = null;
        for ($door = 0; $door < 3; $door++) {
            if ($door !== $initialChoice && $door !== $montyChoice) {
                $remainingDoor = $door;
                break;
            }
        }

        // If the initial choice is the car, staying wins
        if ($initialChoice === $carPosition) {
            $stayWins++;
        } else {
            // Otherwise, switching wins
            $switchWins++;
        }
    }

    return [
        'switchWins' => $switchWins,
        'stayWins' => $stayWins
    ];
}

// Run the simulation
$results = montyHallSimulation();
echo "Switch Wins: " . $results['switchWins'] . "\n";
echo "Stay Wins: " . $results['stayWins'] . "\n";
