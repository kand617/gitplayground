/*
 * TesterPlayerLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/18/2015
 */
package com.herokuapp.fiercereef6800.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class ServerResponse 
        extends BaseModel
        implements java.io.Serializable {
    private static final long serialVersionUID = 5332849156350156334L;
    private String message;
    private boolean passed;
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("Message")
    public String getMessage ( ) { 
        return this.message;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("Message")
    public void setMessage (String value) { 
        this.message = value;
    }
 
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("passed")
    public boolean getPassed ( ) { 
        return this.passed;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("passed")
    public void setPassed (boolean value) { 
        this.passed = value;
    }
 
}
 