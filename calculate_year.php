<?php

/**
 * Function for calculating if a year is a leap year or not.
 * @param int $year
 * @return string
 */
function calculate_year(int $year): string
{
    $result = $year.' -> ';

    if ($year % 4 === 0) {
        if ($year % 100 === 0 and $year % 400 !== 0) {
            $result.="не е високосна\n";
        }
        else {
            $result.="високосна\n";
        }
    } else {
        $result.="не е високосна\n";
    }

    return $result;
}

function calculate_year_refactored(int $year): string
{
    $result = $year.' -> ';

    if ($year % 4 !== 0 || $year % 100 === 0 && $year % 400 !== 0) {
        return $result.="не е високосна\n";
    }

    return $result.="високосна\n";
}