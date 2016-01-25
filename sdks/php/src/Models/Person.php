<?php 
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/08/2015
 */

namespace TesterLib\Models;

use JsonSerializable;

class Person implements JsonSerializable {
    /**
     * TODO: Write general description for this property
     * @param string $name public property
     */
    protected $name;

    /**
     * TODO: Write general description for this property
     * @param string $address public property
     */
    protected $address;

    /**
     * TODO: Write general description for this property
     * @param string $uid public property
     */
    protected $uid;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string            $name      Initialization value for the property $this->name   
	 * @param   string            $address   Initialization value for the property $this->address
	 * @param   string            $uid       Initialization value for the property $this->uid    
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->name    = func_get_arg(0);
            $this->address = func_get_arg(1);
            $this->uid     = func_get_arg(2);
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']    = $this->name;
        $json['address'] = $this->address;
        $json['uid']     = $this->uid;
        return $json;
    }
}