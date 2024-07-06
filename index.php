<?php

use Services\ShapeCollectionService;
use Services\ShapeService;
use function Functional\getShapeCornersCount;
use function Functional\getShapeCornersCountWithEnum;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/App/Functional/shapes.php';

//functional way

$separator = "-------------------\n";

getShapeCornersCount('circle', 'triangle', 'square');

echo $separator;

getShapeCornersCountWithEnum('circle', 'triangle', 'square');

echo $separator;

//oop way
$shapeService = ShapeService::getInstance();
$shapeService->getShapeCornersCount('circle', 'triangle', 'square');

echo $separator;

$shapeCollection = ShapeCollectionService::getInstance();
$shapeCollection->getShapeCornersCount('circle', 'triangle', 'square');