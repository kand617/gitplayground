/*
 * TesterPlayerLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/18/2015
 */
package com.herokuapp.fiercereef6800.models;
import java.util.TreeMap;
public enum SuiteCode {
    Hearts, //TODO: Write general description for this element
    Spades, //TODO: Write general description for this element
    Clubs, //TODO: Write general description for this element
    Diamonds; //TODO: Write general description for this element

    private static TreeMap<Integer, SuiteCode> valueMap = new TreeMap<Integer, SuiteCode>();
    private int value;
	static {
        Hearts.value = 1;
        Spades.value = 2;
        Clubs.value = 3;
        Diamonds.value = 4;
        valueMap.put(1, Hearts);
        valueMap.put(2, Spades);
        valueMap.put(3, Clubs);
        valueMap.put(4, Diamonds);
    }

	/**
    * Returns the enum member associated with the given integer value
    * @return	The enum member against the given integer value */
	@com.fasterxml.jackson.annotation.JsonCreator
	public static SuiteCode fromInt(int toConvert) {
        return valueMap.get(toConvert);
    }

	/**
    * Returns the integer value associated with the enum member
    * @return	The integer value against enum member */
	@com.fasterxml.jackson.annotation.JsonValue
    public int value() {
        return value;
    }
} 