<?php

namespace App\Helpers;


class Momong
{
    public static function ubahTelp($in, $mode = 'wa')
    {
        $in = trim($in);
        $in = str_replace(' ', '', $in);
        $in = str_replace('-', '', $in);
        $in = str_replace('+', '', $in);
        switch ($mode) {
            case "wa":
                if (substr($in, 0, 1) == '0') $in = '62' . substr($in, 1, strlen($in) - 1);
                return $in;
                break;
        }
    }
}
