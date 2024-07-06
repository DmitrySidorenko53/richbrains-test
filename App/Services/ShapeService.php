<?php

namespace Services;

use Throwable;

class ShapeService extends AbstractShapeService
{

    public function getShapeCornersCount(string ...$shapeNames): void
    {
        foreach ($shapeNames as $shapeName) {
            $potentialClassName = 'Shapes\\' . ucfirst($shapeName);
            try {
                $class = new $potentialClassName();
                $cornersCount = $class->getCornersCount();
            } catch (Throwable) {
                $cornersCount = 'not defined';
            } finally {
                echo $shapeName . ' - ' . $cornersCount . "\n";
            }
        }
    }
}