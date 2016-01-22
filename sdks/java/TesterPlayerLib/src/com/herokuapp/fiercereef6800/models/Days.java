/*
 * TesterPlayerLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/18/2015
 */
package com.herokuapp.fiercereef6800.models;
public enum Days {
    Sunday, //TODO: Write general description for this element
    Monday, //TODO: Write general description for this element
    Tuesday, //TODO: Write general description for this element
    Wednesday, //TODO: Write general description for this element
    Thursday, //TODO: Write general description for this element
    Friday, //TODO: Write general description for this element
    Saturday; //TODO: Write general description for this element
    /**
    * Returns the enum member associated with the given integer value
    * @return	The enum member against the given integer value */
	@com.fasterxml.jackson.annotation.JsonCreator
	public static Days fromString(String toConvert) {
        return Days.valueOf(toConvert);
    }

	/**
    * Returns the integer value associated with the enum member
    * @return	The integer value against enum member */
	@com.fasterxml.jackson.annotation.JsonValue
    public String value() {
        return this.name();
    }
} 