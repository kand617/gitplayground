/*
 * TesterPlayerLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/18/2015
 */
package com.herokuapp.fiercereef6800.models;

import java.util.*;

public class PersonBuilder {
    //the instance to build
    private Person person;

    /**
     * Default constructor to initialize the instance
     */
    public PersonBuilder() {
        person = new Person();
    }

    public PersonBuilder address(String address) {
        person.setAddress(address);
        return this;
    }

    public PersonBuilder name(String name) {
        person.setName(name);
        return this;
    }

    public PersonBuilder uid(String uid) {
        person.setUid(uid);
        return this;
    }
    /**
     * Build the instance with the given values
     */
    public Person build() {
        return person;
    }
}