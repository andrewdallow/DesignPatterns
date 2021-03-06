## The Singleton Chocolate Boiler

Suppose we have a Chocolate boiler in a chocolate factory. The job of the
boiler is to take in the chocolate and milk, bring it to a boil, and then pass
them on to the next phase.

If more than one instance of the chocolate boiler exists then bad things can happen,
such as: Boiler draining while boiling chocolate, draining and filling at the
same time etc. Multiple instance will allow the boiler to run multiple methods
at wrong times. 

Thus, the singleton pattern can be used to ensure only a single instance it
created. 

### Disadvantages:
* They are inherently tightly coupled, meaning they are difficult to test 
(unit tests). 
* They maintain their state throughout the lifecycle of the application.
* Violates the Single Responsibility Principle by controlling their own 
creation and lifecycle.
* Difficult to follow dependencies around code because you can't follow where
they are injected as function arguments.
* They make it difficult to find the dependency chain should you need to analyse
it. 

### Alternative - Dependency Injection
An alternate to the singleton is Dependency Injection. This is where you pass 
an object as an argument to a class constructor or function. Like the Singleton 
you get a single instance of the class, but with the added benefit of being able 
to change the instance at runtime. You can also program to an interface instead 
of a concrete class, thus conforming to the Dependency inversion principle. 
Testing is also made easier with the ability to you Mock objects. 

### References
Freeman, E. 2004. Head First Design Patterns. O'Reilly Media, Inc.

Ali, J. 2016. Mastering PHP Design Patterns. Packt Publishing.