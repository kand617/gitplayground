<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/08/2015
 */

namespace TesterLib\Models;

abstract class BaseEnum {
    protected $value;

    /**
     * Returns value of this enum element
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

   /**
     * Tries to set the value  of this enum
     * @param mixed $value
     * @throws Exception If value is not part of this enum
     */
    public function setValue($value)
    {
        if ($this->isValidEnumValue($value))
            $this->value = $value;
        else
            throw new Exception("Invalid type specified!");
    }

   /**
     * Validates if the type given is part of this enum class
     * @param mixed $checkValue
     * @return bool
     */
    public function isValidEnumValue($checkValue)
    {
        $reflector = new ReflectionClass(get_class($this));
        foreach ($reflector->getConstants() as $validValue)
        {
            if(is_string($checkValue) && is_string($validValue) 
                && !strcasecmp($checkValue, $validValue)) {
                return true;
            }
            else if ($validValue == $checkValue) {
                return true;
            }
        }        
        return false;
    }

    /**
     * @param mixed $value Value for this display type
     */
    function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * Magic getter toget the value from this enum element
     * @param string $property
     * @return mixed
     */
    function __get($property)
    {
        return $this->value;
    }

    /**
     * Magic setter to set the enum value using any variable
     * @param string $property
     * @param mixed $value
     * @throws Exception Throws exception if an invalid type is used
     */
    function __set($property, $value)
    {
        $this->setValue($value);
    }

    /**
     * If the enum is requested as a string then this function will be automatically
     * called and the value of this enum will be returned as a string.
     * @return string
     */
    function __toString()
    {
        return strval($this->value);
    }
}