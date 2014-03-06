<?php
class Soy extends CondimentDecorator {
	protected $beverage;

	public function __construct(Beverage $beverage) {
		$this->beverage = $beverage;
	}

	public function getDescription() {
		return $this->beverage->getDescription() . ", Soy";
	}

	public function cost() {
		return .15 + $this->beverage->cost();
	}
}
