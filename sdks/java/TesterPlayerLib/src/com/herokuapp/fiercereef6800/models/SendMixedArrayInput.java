/*
 * TesterPlayerLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/18/2015
 */
package com.herokuapp.fiercereef6800.models;

import java.io.File;
import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class SendMixedArrayInput 
        implements java.io.Serializable {
    private static final long serialVersionUID = 5599511852491701092L;
    private List<String> strings;
    private List<Integer> numbers;
    private List<Person> models;
    private File file;
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("strings")
    public List<String> getStrings ( ) { 
        return this.strings;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("strings")
    public void setStrings (List<String> value) { 
        this.strings = value;
    }
 
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("numbers")
    public List<Integer> getNumbers ( ) { 
        return this.numbers;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("numbers")
    public void setNumbers (List<Integer> value) { 
        this.numbers = value;
    }
 
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("models")
    public List<Person> getModels ( ) { 
        return this.models;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("models")
    public void setModels (List<Person> value) { 
        this.models = value;
    }
 
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("file")
    public File getFile ( ) { 
        return this.file;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("file")
    public void setFile (File value) { 
        this.file = value;
    }
 
}
 