<?php

namespace Hillel\Str;


class Str
{

    public static function after($subject, $after)
    {
        if (strpos($subject, $after) !== false) {
            return preg_replace("/$after/i", "", $subject);
        }
        return $subject;
    }

    public static function afterLast($subject, $after)
    {
        if (strpos($subject, $after) !== false) {
            $name = explode('\\', $subject);
            return array_pop($name);
        }
        return $subject;
    }
}
?>
