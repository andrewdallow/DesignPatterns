# Builder Pattern
The builder pattern is used to encapsulate the construction of a complex object
and allow it to be constructed in steps. 

![alt text](https://upload.wikimedia.org/wikipedia/commons/8/87/W3sDesign_Builder_Design_Pattern_UML.jpg)
### Benefits
* Encapsulates the way a complex object is constructed
* Allows objects to be constructed in a multi-step and varying process as
opposed to one-step factories.
* Hides the internal representation of the product from the client;
* Product implementations can be swamped in and out because the client only 
sees an abstract interface. 

### Drawbacks
* Constructing objects requires more domain knowledge of the client than when using
a Factory. 

### Example
The example code here shows the building of a vacation object which hold the details
of a vacation such as date, hotel, reservations, events, etc. Creating the
vacation object through the constructor would be complex, having many arguments.
Thus the builder pattern is created to build the vacation object first and then
return it to the client. The builder is also directed to build vacation by the 
VacationPlanner class which reports back to the client. 

    Client: index.php
    Director: VacationPlanner
    Builder: AbstractBuilder and VacationBuilder
    Object Built: VacationDay

### References
Ali, J. 2016. Mastering PHP Design Patterns. Packt Publishing.

Freeman, E. 2004. Head First Design Patterns. O'Reilly Media, Inc.