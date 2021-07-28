<?php
require __DIR__ . '/../src/BasketBall.php';
require __DIR__ . '/../src/Numerica.php';

use App\BasketBall;
use App\Numerica;

$basket = new BasketBall($home,$away);
$numbers = new Numerica([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);

echo $basket->home();
echo $basket->homeScore();
echo $basket->homeOnePoint();
echo $basket->homeThreePoints();
echo $basket->away();
echo $basket->awayScore();
echo $basket->awayOnePoint();
echo $basket->awayTwoPoints();
echo $basket->awayThreePoints();

echo $numbers->first();
echo $numbers->last();
echo $numbers->min();
echo $numbers->max();
echo $numbers->sum();
echo $numbers->rsort();
echo $numbers->sort();
echo $numbers->odd();
echo $numbers->even();
echo $numbers->greaterThan();
