<?php

namespace WA\Utilities;

class Arrays
{
    /**
     * Cleans the Array
     * Removes all the empty values from the Array
     */
    public static function clean(array $array = [])
    {
        foreach ($array as $key => $value) {
            if (empty($value)) {
                unset($array[$key]);
            }
        }

        return $array;
    }
}
