<?php

declare(strict_types=1);

namespace Khuddus\Helpers\CamelCase;

class StringHelper
{

 
    /**
     * Converts the given string into camelCased string
     *
     * @param string $str string to convert
     *
     * @return array Returns the string converted into camel case
     */
    public static function convertToCamelCasedString(string $str): string
    {
        $stringWithoutHyphens = str_replace('-', ' ', $str);
        $stringWithoutUnderScores = str_replace('_', ' ', $stringWithoutHyphens);
        $camelCasedString = ucwords($stringWithoutUnderScores);
        $cleanedCamelCasedString = lcfirst($camelCasedString);
        return str_replace(' ', '', $cleanedCamelCasedString);
    }
}
