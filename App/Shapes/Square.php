<?php

namespace Shapes;

use Enums\ShapeEnum;

class Square extends Shape
{

    public function __construct()
    {
        parent::__construct(ShapeEnum::SQUARE->value);
    }
}