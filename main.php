<?php

require('validate_input.php');
require('calculate_year.php');

echo "Здравей, тук съм за да ти кажа дали дадена година е високосна според Григорианския календар!\n";
echo "Ако искаш да прекратиш, можеш да напишеш 'quit'/'q'/'exit'.\n\n";

$input = '';

while (true)
{
    //    GETTING THE USER INPUT
    $input = strtolower(readline("Enter a year -> "));

    //    QUITTING THE PROGRAM
    if ($input === 'quit' or $input === 'q' or $input === 'exit') {
        break;
    }

    //    INPUT VALIDATION
    if (validate_input($input)) {
        echo "Невалидна година!\n";
        echo "Сигурен ли си, че въвеждаш година по-голяма от 0?\n";
        continue;
    }

    $result = calculate_year_refactored((int) $input);

    //    PRINTING THE RESULT TO THE CONSOLE
    echo $result."\n";
}

echo "Надявам се да съм бил от полза!\n";
echo "До скоро!\n";
