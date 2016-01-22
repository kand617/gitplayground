/*
 * TesterPlayerLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/18/2015
 */
package com.herokuapp.fiercereef6800.models;

import java.util.*;

public class SendMixedArrayInputBuilder {
    //the instance to build
    private SendMixedArrayInput sendMixedArrayInput;

    /**
     * Default constructor to initialize the instance
     */
    public SendMixedArrayInputBuilder() {
        sendMixedArrayInput = new SendMixedArrayInput();
    }

    public SendMixedArrayInputBuilder strings(List<String> strings) {
        sendMixedArrayInput.setStrings(strings);
        return this;
    }

    public SendMixedArrayInputBuilder numbers(List<Integer> numbers) {
        sendMixedArrayInput.setNumbers(numbers);
        return this;
    }

    public SendMixedArrayInputBuilder models(List<Person> models) {
        sendMixedArrayInput.setModels(models);
        return this;
    }

    public SendMixedArrayInputBuilder file(File file) {
        sendMixedArrayInput.setFile(file);
        return this;
    }
    /**
     * Build the instance with the given values
     */
    public SendMixedArrayInput build() {
        return sendMixedArrayInput;
    }
}