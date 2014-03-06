/*
Beverage is an abstract class with the two methods getDescription() and cost()
*/
public abstract class Beverage {
 String description = "Unknown Beverage";
 /*
getDescription is already implemented for us, but we  need to implement cost() 
in the subclasses.
 */
 public String getDescription() {
   return description;
 }
 
 public abstract double cost();
}