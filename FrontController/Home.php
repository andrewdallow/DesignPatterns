<?php

namespace FrontController;

class Home
{
    public function show(): void
    {
        echo '<a href="./">Home Page</a> '
            . '<a href="./Student/hello">Student Page</a> '
            . '<p>Displaying Home Page</p>';
    }

}