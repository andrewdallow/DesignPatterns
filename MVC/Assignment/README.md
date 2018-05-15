## MVC Unit Converter

This unit converter can be used to convert between any type of units.
  For example, from metric to imperial units as already implemented here.
  It is not limited to just Length conversion, but any converter which
  can extend the UnitConverterAbstract class.
 
  The Converter is Designed around the Model-View-Controller Pattern where:
  
       Model: UnitConverterAbstract, LengthConverterModel
       View: ConverterView
       Controller: ConverterController
       
  #### How it works:
  1. First we initialise the model LengthConverterModel and set a base value and unit (in this case 1 Metre)
  
  2. Next we initialise he ConverterController with the model object, then if the 'action' value in the
  $_GET global value is set (with a value equal to the controllers 'convert' method name) 
  then the method will be called on the controller with the $_POST global containing the measurement
  amount and corresponding units, this in turn updates the model with a new base value. 
  
  3. Next, we initialise the view with the model. 
  
  4. Finally, we output the html forms from the ConverterView. In this case a form uses the 'post' method
  along with the 'action' set to 'convert' so that when the Convert button is pressed there is a callback
  to the controller to update the model with the new base value. 
  
  Note: The controller View holds the html for a single form, which is then used in a loop 
  to create multiple forms for different length units. 
  
  
  
  