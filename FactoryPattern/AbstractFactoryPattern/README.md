# Abstract Factory Pattern
An Abstract Factory gives us an interface for creating a family of products. By
writing code that uses this interface, we decouple our code from the actual 
factory that creates the objects. That allows us to implement a variety of 
factories that produce objects meant for different contexts - such as different
regions, operating systems, different looks and feels etc.

Because the code is decoupled from the actual products, we can substitute 
different factories to get different behaviours.

![Diagram](https://github.com/andrewdallow/DesignPatterns/blob/master/FactoryPattern/AbstractFactoryPattern/AbstractFactoryPattern.jpg)

### Example
The example uses the same context of a Pizza Store used in the Factory Method Section.
This time an abstract factory is used to create the ingredients for a pizza.
Each Pizza is made from Dough, Sauce, Cheese, Clams, and Veggies. 
However, each Region implements different ingredients for each part
of the pizzas. Thus Each concrete factory represents each region and their
personalised recipes. 

![Diagram](https://github.com/andrewdallow/DesignPatterns/blob/master/FactoryPattern/AbstractFactoryPattern/AbstractFactoryPattern.png)

### References
Freeman, E. 2004. Head First Design Patterns. O'Reilly Media, Inc.