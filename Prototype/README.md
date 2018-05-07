## Prototype Pattern
#### Definition:
The Prototype design pattern uses cloning to replicate instantiated objects.
New objects are created by copying prototypical instances with the purpose of 
reducing the cost of creating new objects. Creating new objects with the 'new'
operation is prohibitively more expensive for an application than cloning an
existing object. 

When an object is cloned the constructor does not get called again so when
creating a prototypical class avoid putting any logic in the constructor.

![alt text](https://github.com/andrewdallow/DesignPatterns/blob/master/Prototype/prototype.png)


### When to use:
* Should be used where you make several instances of a prototypical object.
* E.g. Gaming: Many Warriors in an army. eCommerce: Creation of typical 
products, then altered as necessary. 

### Example 
The Example code shown here takes an abstract class HumanCone with the PHP method
__clone() set as abstract to require all subclasses be able to be cloned. One
can also set the name of the Human.
The concrete subclass Male, which extents Human clone, can be cloned as shown in
the Client class which class a Male object and changes the name. 

    Prototype: HumanClone
    Concrete Prototype: Male
    Client: Client
    
### References:
Ali, J. 2016. Mastering PHP Design Patterns. Packt Publishing.
Sanders, W. 2013. Learning PHP Design Patterns. O'Reilly Media, Inc.