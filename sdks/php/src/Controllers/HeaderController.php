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
class HeaderController {
    /**
     * Sends a single header params
     * @param  string     $customHeader      Required parameter: TODO: type description here
     * @param  string     $value             Required parameter: Represents the value of the custom header
     * @return string response from the API call*/
    public function sendHeaders (
                $customHeader,
                $value) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/header';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'Stamplay SDK',
            'custom-header'   => $customHeader
        );

        //prepare parameters
        $parameters = array (
            'value'         => $value
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