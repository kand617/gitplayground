/**
  * @module TesterLib
  *  
  * Testing various api features
  */

var configuration = require('./configuration'),
    ResponseTypesController = require('./Controllers/ResponseTypesController'),
    ErrorCodesController = require('./Controllers/ErrorCodesController'),
    BodyParamsController = require('./Controllers/BodyParamsController'),
    FormParamsController = require('./Controllers/FormParamsController'),
    EchoController = require('./Controllers/EchoController'),
    HeaderController = require('./Controllers/HeaderController'),
    QueryParamController = require('./Controllers/QueryParamController'),
    Person = require('./Models/Person'),
    Days = require('./Models/Days'),
    SuiteCode = require('./Models/SuiteCode');


function initializer(){}

//Main functional components of TesterLib
initializer.configuration = configuration;
initializer.ResponseTypesController = ResponseTypesController;
initializer.ErrorCodesController = ErrorCodesController;
initializer.BodyParamsController = BodyParamsController;
initializer.FormParamsController = FormParamsController;
initializer.EchoController = EchoController;
initializer.HeaderController = HeaderController;
initializer.QueryParamController = QueryParamController;

//Main Models of TesterLib
initializer.Person = Person;
initializer.Days = Days;
initializer.SuiteCode = SuiteCode;

module.exports = initializer;