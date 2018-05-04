<?php


namespace RegistryPattern;

/**
 * Registry Pattern class
 *
 * An Abstract class Representing a Registry of global objects and values. It
 * can be access using stating set and get methods.
 *
 */
abstract class Registry
{

    /**
     * Array of Stored objects and data.
     *
     * @var array
     */
    private static $_storedItems = [];

    /**
     * Store an object or value with the specified key
     *
     * @param $key
     * @param $value
     */
    public static function set($key, $value): void
    {
        self::$_storedItems[$key] = $value;
    }

    /**
     * Get the object for value with the specified keu.
     *
     * @param $key
     *
     * @return mixed
     */
    public static function get($key)
    {
        return self::$_storedItems[$key];
    }

}