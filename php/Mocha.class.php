<?php
class Mocha extends CondimentDecorator {
	protected $beverage;
 
	public function __construct(Beverage $beverage) {
		$this->beverage = $beverage;
	}
 
	public function getDescription() {
		return $this->beverage->getDescription() . ", Mocha";
	}
 
	public function cost() {
		return .20 + $this->beverage->cost();
	}
}
