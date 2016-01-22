
/**
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 01/05/2016
 */
var BaseModel = require("./BaseModel");
/**
 * Creates a instance of Person
 *
 * @constructor
 */
function Person() {
    this.name = null;     
    this.address = null;     
    this.uid = null;     
}

Person.prototype = new BaseModel();
Person.prototype.constructor = BaseModel;

/**
 * TODO: Write general description for this method
 *
 * @return {string}
 */
Person.prototype.getName = function() {
    return this.name;
};

/**
 * Setter for Name
 * 
 * @param {string} value 
 */
Person.prototype.setName = function(value) {
    this.name = value;
};

/**
 * TODO: Write general description for this method
 *
 * @return {string}
 */
Person.prototype.getAddress = function() {
    return this.address;
};

/**
 * Setter for Address
 * 
 * @param {string} value 
 */
Person.prototype.setAddress = function(value) {
    this.address = value;
};

/**
 * TODO: Write general description for this method
 *
 * @return {string}
 */
Person.prototype.getUid = function() {
    return this.uid;
};

/**
 * Setter for Uid
 * 
 * @param {string} value 
 */
Person.prototype.setUid = function(value) {
    this.uid = value;
};

module.exports = Person;