<?php
require_once('Beverage.class.php');
require_once('DarkRoast.class.php');
require_once('Decaf.class.php');
require_once('Espresso.class.php');
require_once('HouseBlend.class.php');

require_once('CondimentDecorator.class.php');
require_once('Milk.class.php');
require_once('Mocha.class.php');
require_once('Soy.class.php');
require_once('Whip.class.php');

$beverage = new Espresso();
echo $beverage->getDescription() . " $" . $beverage->cost() . "\n\n";
echo '</br>';
$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . " $" . $beverage2->cost() . "\n";
echo '</br>';
$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . " $" . $beverage3->cost() . "\n";
echo '</br>';
$beverage4 = new Decaf();
$beverage4 = new Milk($beverage4);
$beverage4 = new Soy($beverage4);
echo $beverage4->getDescription() . " $" . $beverage4->cost() . "\n";
