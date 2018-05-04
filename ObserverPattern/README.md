# The Observer Pattern

### Definition
The observer pattern defines a one-to-many dependency between objects so that 
when one objects changes state, all its dependents are notified and updated 
automatically. 

### Advantages
* Has loose coupling between objects interacting objects
* Can send data between objects without any changes in Subject or Observer class.
* Observers can be added/removed at any point
### Disadvantages
* Can lead to performance issues with a large number of observers having to
iterate over each observer.
* In software applications, notifications can, at times, be undependable and 
result in race conditions or inconsistency. 

### Example with Weather station:
The code presented here shows an example a weather station with current weather (Subject)
data that needs to update different displays (Observer). These displays Observe
the weather data object which notify them when measurements change and then
update their displays accordingly. A simple working example is shown in the 
index.php. 

    Observers: WeatherDisplayObserver.php
    Subject: WeatherDataSubject.php
    Interfaces: ObserverInterfaces.php
    
### References
Freeman, E. 2004. Head First Design Patterns. O'Reilly Media, Inc.

Ali, J. 2016. Mastering PHP Design Patterns. Packt Publishing.