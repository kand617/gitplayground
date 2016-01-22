/*
 * TesterPlayerLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/18/2015
 */
package com.herokuapp.fiercereef6800.controllers;

import java.io.*;
import java.util.*;
import java.util.concurrent.*;

import com.herokuapp.fiercereef6800.http.client.HttpClient;
import com.herokuapp.fiercereef6800.http.client.HttpContext;
import com.herokuapp.fiercereef6800.http.request.HttpRequest;
import com.herokuapp.fiercereef6800.http.response.HttpResponse;
import com.herokuapp.fiercereef6800.http.response.HttpStringResponse;
import com.herokuapp.fiercereef6800.http.client.APICallBack;
import com.herokuapp.fiercereef6800.*;
import com.herokuapp.fiercereef6800.models.*;

public class HeaderController extends BaseController {
    /**
     * Initialize the base controller using the given http client
     */
    public HeaderController() {
        super();
    }

    /**
     * Initialize the base controller using the given http client
     *
     * @param _client The given http client */
    public HeaderController(HttpClient _client) {
        super(_client);
    }

    /**
     * Sends a single header params
     * @param    customHeader    Required parameter: TODO: type description here
     * @param    value    Required parameter: Represents the value of the custom header
	 * @return	Returns the String response from the API call*/
    public void sendHeadersAsync(
            final String customHeader,
            final String value,
            final APICallBack<String> callBack
    ) {
        //the base uri for api requests
        String baseUri = Configuration.baseUri;

        //prepare query string for API call
        StringBuilder queryBuilder = new StringBuilder(baseUri);
        queryBuilder.append("/header");
        //validate and preprocess url
        String queryUrl = APIHelper.cleanUrl(queryBuilder);

        //load all headers for the outgoing API request
        Map<String, String> headers = new HashMap<String, String>() {
            private static final long serialVersionUID = 5750093100522231239L;
            {
                    put( "user-agent", "Stamplay SDK" );
                    put( "custom-header", customHeader );
            }
        };

        //load all fields for the outgoing API request
        Map<String, Object> parameters = new HashMap<String, Object>() {
            private static final long serialVersionUID = 4918964929109891194L;
            {
                    put( "value", value );
            }
        };

        //prepare and invoke the API call request to fetch the response
        final HttpRequest request = clientInstance.post(queryUrl, headers, APIHelper.prepareFormFields(parameters));

        //invoke request and get response
        Runnable responseTask = new Runnable() {
            public void run() {
                //make the API call
                clientInstance.executeAsStringAsync(request, new APICallBack<HttpResponse>() {
                    public void onSuccess(HttpContext context, HttpResponse response) {
                        try {
                            //Error handling using HTTP status codes
                            int responseCode = response.getStatusCode();
                            if ((responseCode < 200) || (responseCode > 206)) //[200,206] = HTTP OK
                                throw new APIException("HTTP Response Not OK", responseCode, response.getRawBody());

                            //extract result from the http response
                            String result = ((HttpStringResponse)response).getBody();
                            //let the caller know of the success
                            callBack.onSuccess(context, result);
                        } catch (APIException error) {
                            //let the caller know of the error
                            callBack.onFailure(context, error);
                        } catch (Exception exception) {
                            //let the caller know of the caught Exception
                            callBack.onFailure(context, exception);
                        }
                    }
                    public void onFailure(HttpContext context, Throwable error) {
                        //let the caller know of the failure
                        callBack.onFailure(context, error);
                    }
                });
            }
        };

        //execute async using thread pool
        APIHelper.getScheduler().execute(responseTask);
    }
        
}