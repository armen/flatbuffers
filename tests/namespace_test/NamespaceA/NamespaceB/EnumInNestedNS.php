<?php
// automatically generated, do not modify

namespace NamespaceA\NamespaceB;

class EnumInNestedNS
{
    const A = 0;
    const B = 1;
    const C = 2;

    private static $names = array(
        "A",
        "B",
        "C",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}
