<?php

namespace Enums;

enum ShapeEnum: int
{
    case SQUARE = 4;
    case CIRCLE = 0;

    public static function definedShapes(): array
    {
        $cases = self::cases();
        $definedShapes = [];
        foreach ($cases as $case) {
            $index = strtolower($case->name);
            $definedShapes[$index] = $case->value;
        }
        return $definedShapes;
    }
}
