<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/08/2015
 */

namespace TesterLib\Controllers;

use TesterLib\APIException;
use TesterLib\APIHelper;
use TesterLib\Configuration;
use Unirest\Unirest;
use Unirest\File;
class FormParamsController {
    /**
	 * Array access utility method
     * @param  array          $arr         Array of values to read from
     * @param  string         $key         Key to get the value from the array
     * @param  mixed|null     $default     Default value to use if the key was not found */
    private function val($arr, $key, $default = NULL)
    {
        if isset($arr[$key]) {
            return is_bool($arr[$key]) ? var_export($arr[$key], true) : $arr[$key];
        }
        return $default;
    }

    /**
     * TODO: type endpoint description here
     * @param  array     $marray    Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function sendIntegerArray (
                $marray) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/form/number?array=true';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'Stamplay SDK',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'array' => array_values($marray)
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * TODO: type endpoint description here
     * @param  array     $marray    Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function sendStringArray (
                $marray) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/form/string?array=true';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'Stamplay SDK',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'array' => array_values($marray)
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * TODO: type endpoint description here
     * @param  Person     $model     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function sendModel (
                $model) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/form/model';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'Stamplay SDK',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'model' => json_encode($model)
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * TODO: type endpoint description here
     * @param  array     $marray    Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function sendModelArray (
                $marray) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/form/model?array=true';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'Stamplay SDK',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'array' => json_encode($marray)
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * TODO: type endpoint description here
     * @param  string     $file     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function sendFile (
                $file) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/form/file';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'Stamplay SDK',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            "file" => File::add($file)
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * Send a variety for form params. Returns file count and body params
     * @param  array  $options    Array with all options for search
     * @param  string     $options['file']        Required parameter: TODO: type description here
     * @param  array      $options['models']      Required parameter: TODO: type description here
     * @param  array      $options['numbers']     Required parameter: TODO: type description here
     * @param  array      $options['strings']     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function sendMixedArray (
                $options) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/form/mixed';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'Stamplay SDK',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            "file"  => File::add($file),
            'models' => json_encode($models),
            'numbers' => array_values($numbers),
            'strings' => array_values($strings)
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * TODO: type endpoint description here
     * @param  string     $value     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function sendString (
                $value) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/form/string';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'Stamplay SDK',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'value' => $value
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * TODO: type endpoint description here
     * @param  array     $marray    Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function sendIntegerEnumArray (
                $marray) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/form/integerenum?array=true';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'Stamplay SDK',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'array' => json_encode($marray)
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * TODO: type endpoint description here
     * @param  Days     $marray    Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function sendStringEnumArray (
                $marray) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/form/stringenum?array=true';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'Stamplay SDK',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'array' => (null != $marray) ? $marray : null
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
}