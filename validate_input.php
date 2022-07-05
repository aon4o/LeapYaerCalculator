<?php

/**
 * Function for input validation.
 * @param string $input
 * @return bool
 */
function validate_input(string $input): bool
{
    $int_input = (int) $input;

    if ($int_input <= 0) {
        return true;
    }

    return false;
}
