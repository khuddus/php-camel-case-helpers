<?php

declare(strict_types=1);

namespace Khuddus\Helpers\CamelCase;

class ArrayHelper
{

    /**
     * Converts the given array into camelCased array
     *
     * @param array $arr array to convert
     *
     * @param int $level number of levels you want to convert. Default is all
     *
     * @return array Returns the array converted into camel case
     */
    public static function convertToCamelCasedArray(array $arr, int $level = null): array
    {
        return ArrayHelper::getCamelCaseConvertedArray($arr, $level);
    }
    private static function getCamelCaseConvertedArray(array $arr, int $level = null, $iteration = 0)
    {
        if (!is_null($level) && $level == $iteration) {
            return $arr;
        }
        $camelCaseConvertedArray = [];
        foreach ($arr as $key => $value) {
            if (!is_numeric($key)) {
                $newKey = StringHelper::convertToCamelCasedString("$key");
            } else {
                $newKey = $key;
            }
            
            if (is_array($value)) {
                $newValue = ArrayHelper::getCamelCaseConvertedArray($value, $level, $iteration + 1);
            } else {
                $newValue = $value;
            }
            $camelCaseConvertedArray[$newKey] = $newValue;
        }
        return $camelCaseConvertedArray;
    }
}
