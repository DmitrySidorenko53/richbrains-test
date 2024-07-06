<?php

namespace Services;

abstract class AbstractShapeService
{
    private static array $instances = [];

    protected function __construct()
    {

    }

    protected function __clone()
    {

    }

    abstract public function getShapeCornersCount(string ...$shapeNames): void;

    public static function getInstance(): AbstractShapeService
    {
        $class = static::class;
        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }

        return self::$instances[$class];
    }
}