<?php
// Solution trouvée ici : https://github.com/flytomek/advent-of-code-2022/blob/master/day-02/process1.php, différence de 10 avec ma solution je ne sais pas pourquoi. Mais celle-ci est la bonne réponse
declare(strict_types=1);

$fh = fopen("input.txt", "r");

$totalScore = 0;
$scoreMap = [
    'A X' => 4, // 3+1
    'A Y' => 8, // 6+2
    'A Z' => 3, // 0+3
    'B X' => 1, // 0+1
    'B Y' => 5, // 3+2
    'B Z' => 9, // 6+3
    'C X' => 7, // 6+1
    'C Y' => 2, // 0+2
    'C Z' => 6, // 3+3
];

if($fh) {
    while (($line = fgets($fh)) !== false) {
        $line = trim($line);

        if($line !== PHP_EOL) {
            $totalScore += (int) $scoreMap[$line];
        }
    }
    fclose($fh);
}

echo sprintf( "Answer: %s\n", $totalScore);
