<?php

namespace MVC\HelloWorld;

class Model
{
    private $_text;

    public function __construct()
    {
        $this->setText('Hello World!');
    }

    public function setText(string $text): void
    {
        $this->_text = $text;
    }

    public function getText()
    {
        return $this->_text;
    }


}

class View
{
    private $_model;

    public function __construct(Model $model)
    {
        $this->_model = $model;
    }

    public function output()
    {
        return '<a href="?action=textclicked">' . $this->_model->getText()
            . '</a>';
    }

}

class Controller
{
    private $_model;

    public function __construct(Model $model)
    {
        $this->_model = $model;
    }

    public function textClicked(): void
    {
        $this->_model->setText('Text Updated');
    }


}