<?php

namespace Services;

use Shapes\Circle;
use Shapes\Shape;
use Shapes\Square;

class ShapeCollectionService extends AbstractShapeService
{
    private array $requiredShapes;

    public function __construct()
    {
        parent::__construct();
        $this->addShapeAsRequired(new Circle());
        $this->addShapeAsRequired(new Square());
    }


    public function getShapeCornersCount(string ...$shapeNames): void
    {
        foreach ($shapeNames as $shapeName) {
            $cornersCount = array_key_exists($shapeName, $this->requiredShapes)
                ? $this->requiredShapes[$shapeName]->getCornersCount() : 'not defined';
            echo $shapeName . ' - ' . $cornersCount . "\n";
        }
    }

    private function addShapeAsRequired(Shape $shape): void
    {
        $this->requiredShapes[$shape->getShapeName()] = $shape;
    }
}