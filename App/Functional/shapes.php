<?php

namespace Functional;

use Enums\ShapeEnum;

function getShapeCornersCount(string ...$shapeNames): void
{
    $definedShapes = [
        'square' => 4,
        'circle' => 0,
    ];

    foreach ($shapeNames as $shapeName) {

        $cornersCount = array_key_exists($shapeName, $definedShapes)
            ? $definedShapes[$shapeName] : 'not defined';

        echo $shapeName . ' - ' . $cornersCount . "\n";
    }
}

function getShapeCornersCountWithEnum(string ...$shapeNames): void
{
    $definedShapes = ShapeEnum::definedShapes();

    foreach ($shapeNames as $shapeName) {

        $cornersCount = array_key_exists($shapeName, $definedShapes)
            ? $definedShapes[$shapeName] : 'not defined';

        echo $shapeName . ' - ' . $cornersCount . "\n";
    }
}
