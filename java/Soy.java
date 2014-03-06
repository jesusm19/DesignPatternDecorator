public class Soy extends CondimentDecorator {
 Beverage beverage; // We’re going to instantiate Mocha with a reference to a Beverage using:
 
 /*A way to set this instance  variable to the object we are wrapping. 
Here, we’re going to pass the beverage  we’re wrapping to the decorator’s 
constructor.*/
 public Soy(Beverage beverage) {
 this.beverage = beverage;
 }
 
 public String getDescription() {
 return beverage.getDescription() + ", Soy";
 }
 
 public double cost() {
 return .15 + beverage.cost();
 }
}