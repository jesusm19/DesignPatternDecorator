//First we extend the Beverage class, since this is a beverage.

public class Espresso extends Beverage {
 /*To take care of the description, we set this in the constructor for the 
class. Remember the description instance variable is inherited from Beverage*/
 public Espresso() {
 	description = "Espresso Coffe";
 }
 /*Finally, we need to compute the cost of an Espresso. We don’t 
need to worry about adding in condiments in this class, we just 
need to return the p*/
 public double cost() {
 	return 1.99;
 }
}