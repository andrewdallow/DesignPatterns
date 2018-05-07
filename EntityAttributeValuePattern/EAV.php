<?php

/**
 * Class representing an entity which can have added attributes with values.
 */
class Entity
{
    private $_name;
    private $_values = [];

    public function __construct(string $name, array $values)
    {
        $this->_name = $name;
        $this->setValues($values);

    }

    /**
     * @param mixed $values
     */
    public function setValues(array $values): void
    {
        foreach ($values as $value) {
            $this->_values[] = $value;
        }
    }

    public function __toString()
    {
        $text = ['<h1>' . $this->_name . '</h1>'];
        foreach ($this->_values as $value) {
            $text[] = (string)$value;
        }
        return implode(' ', $text);
    }

}

/**
 * Class representing the attribute names of an entity.
 */
class Attribute
{
    private $_name;

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

    public function __toString()
    {
        return $this->_name;
    }


}

/**
 * Class representing the values of a particular attribute for an entity.
 */
class Value
{
    private $_attribute;
    private $_value;

    public function __construct(Attribute $attribute, $value)
    {
        $this->_attribute = $attribute;
        $this->_value = $value;
    }

    public function __toString()
    {
        return '<p><strong>' . (string)$this->_attribute . ':</strong> '
            . $this->_value
            . '</p>';
    }
}