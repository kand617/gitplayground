/*
 * TesterPlayerLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/18/2015
 */
package com.herokuapp.fiercereef6800.models;

import java.util.*;

public class ServerResponseBuilder {
    //the instance to build
    private ServerResponse serverResponse;

    /**
     * Default constructor to initialize the instance
     */
    public ServerResponseBuilder() {
        serverResponse = new ServerResponse();
    }

    public ServerResponseBuilder message(String message) {
        serverResponse.setMessage(message);
        return this;
    }

    public ServerResponseBuilder passed(boolean passed) {
        serverResponse.setPassed(passed);
        return this;
    }
    /**
     * Build the instance with the given values
     */
    public ServerResponse build() {
        return serverResponse;
    }
}