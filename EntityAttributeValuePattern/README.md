## Entity-Attribute-Value Pattern (EAV)
The Entity-attribute-value (EAV) Model is a data model to describe entities
(e.g. user, product) where the number of attributes (properties, parameters) that 
can be used to describe them is potentially vast, but the number that will 
actually apply to a given entity is relatively modest. 

![data model diagram](https://res.cloudinary.com/inviqa-uk/image/upload/v1470403853/row-modelling.png)

### Example
The code shown here has a class Entity which can have Values added to it by
specifying Value objects which are created with a specified Attribute Object 
and specified data value. The index.php file shows this model in action. 

### References
Jackson, P. 2015. EAV Zero to EAV Hero. https://www.youtube.com/watch?v=WneHTRZVbec

Raszczynski, R. 2010. The EAV data model. https://inviqa.com/blog/eav-data-model
