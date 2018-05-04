## The Registry Pattern

### Definition:
The Registry Pattern implements a central storage for objects and data which
can be accessed anywhere in the application. 

#### Advantages:
* Accessing collaborator objects without instantiating them.
* In testing, the Registry can be filled with Mock objects.


#### Disadvantages:
* Hard coded static calls to the Registry
* Can't Limit which objects have access to it.
* Depending on the Registry may mean depending on each stored component.
* Promotes poor design.

#### Examples of Use:
* Global configuration object.
* Logging. 
* Database access.
