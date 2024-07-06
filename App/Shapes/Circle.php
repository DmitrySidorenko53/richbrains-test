<?php

namespace Shapes;

use Enums\ShapeEnum;

class Circle extends Shape
{

    public function __construct()
    {
        parent::__construct(ShapeEnum::CIRCLE->value);
    }
}