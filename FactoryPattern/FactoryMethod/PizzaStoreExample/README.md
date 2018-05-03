## Pizza Store Example of the Factory Method

### Definition: 
The Factory Method Pattern defines an interface for creating an object, but lets
subclasses decide which class to instantiate. Factory Method lets a class defer
instantiation to subclasses. 

### Pizza Store:
Suppose we have a Pizza Chain with many pizza stores which make different
styles of pizza. In this example we use the Factory Method Pattern for creating
an order for a pizza.

There are three Pizza Stores, NYPizzaStore, ChicagoPizzaStore, and 
CaliforniaPizzaStore, which all make their own style of pizza. The Factory Method
is used to create the objects representing the pizzas for each store. 

Once a store is instantiated one can call the orderPizza Method with a string 
related to the pizza type and it will create a series of HTML text response 
representing the making of a pizza. 

The index.php shows a working example of the program. 

Note: not all pizza types mentioned in the factory method exist. 

#### Example:
    $nyStore = new NYPizzaStore();
    $pizza = $nyStore->orderPizza('cheese');
    echo 'Ethan ordered a ' . $pizza->getName();

Will produce the following output.

    Preparing NY Style Sauce and Cheese Pizza
    
    Tossing dough...
    
    Adding Sauces...
    
    Adding Toppings...
    
    Grated Reggiano Cheese
    
    Baking for 25 minutes at 350F.
    
    Cutting the pizza into diagonal slices.
    
    Place pizza in official PizzaStore Box.
    
    Ethan ordered a NY Style Sauce and Cheese Pizza


### References
Freeman, E. 2004. Head First Design Patterns. O'Reilly Media, Inc.