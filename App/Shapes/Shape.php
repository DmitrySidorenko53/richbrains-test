<?php

namespace Shapes;

abstract class Shape
{
    protected int $cornersCount;

    /**
     * @param int $cornersCount
     */
    protected function __construct(int $cornersCount)
    {
        $this->setCornersCount($cornersCount);
    }

    public function getCornersCount(): int
    {
        return $this->cornersCount;
    }

    public function setCornersCount(int $count): void
    {
        $this->cornersCount = max($count, 0);
    }

    public function getShapeName(): string
    {
        $lengthOfNamespace = strrpos($this::class, '\\');
        $shapeName = substr($this::class, $lengthOfNamespace + 1);
        return strtolower($shapeName);
    }
}