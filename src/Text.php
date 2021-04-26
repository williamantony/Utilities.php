<?php

namespace WA\Utilities;

class Text
{
    public static function isRomanNumeral($letters)
    {
        $letters = str_split(strtoupper($letters));
        $numerals = ["I", "V", "X"];

        foreach ($letters as $letter) {
            if (!in_array(strtoupper($letter), $numerals)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get duration format from \DateInterval Object
     * based on ISO 8601 duration specification
     */
    public function toDateIntervalDuration(\DateInterval $interval = null)
    {
        if (!isset($interval)) {
            return false;
        }

        $duration = "P";

        if ($interval->y != 0) {
            $duration .= $interval->y . "Y";
        }

        if ($interval->m != 0) {
            $duration .= $interval->m . "M";
        }

        if ($interval->d != 0) {
            $duration .= $interval->d . "D";
        }

        if ($interval->h != 0) {
            $duration .= $interval->h . "H";
        }

        if ($interval->i != 0) {
            $duration .= $interval->i . "M";
        }

        if ($interval->s != 0) {
            $duration .= $interval->s . "S";
        }

        return $duration;
    }
}
