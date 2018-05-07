## The Front Controller

#### Definition:
The Front Controller design pattern is used to provide a centralised request 
handling mechanism so that all requests will be handled by a single handler
and dispatched to the required views.

### Example Website
A website whereby all requests are passed through the index.php to a front
controller which parses the URI components to determine which objects and
methods are to be called and in turn display a web page. 

The example takes the URI as /[Controller]/[Method]/[params/.../...], 
instantiates the controller and then calls its method. If any of the parameters
do not exist then an error page is display. 

    FrontController: FrontController.php
    Views: Student.php, Home.php

In order for all requests to go through the index.php file, a .htaccess file is
used to redirect the requests:
    
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-s
    RewriteCond %{REQUEST_FILENAME} !-l
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^.*$ index.php [NC,L]