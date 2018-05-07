<?php

namespace FrontController;


class Error
{
    public function show404(): void
    {
        echo '<h1>Error 404: Page Not Found</h1>';
    }

}