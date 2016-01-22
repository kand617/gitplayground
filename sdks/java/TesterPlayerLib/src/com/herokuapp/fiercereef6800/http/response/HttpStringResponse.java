/*
 * TesterPlayerLib
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/18/2015
 */
package com.herokuapp.fiercereef6800.http.response;

import java.io.InputStream;
import java.util.Map;

public class HttpStringResponse extends HttpResponse {
    /**
     * Private store for properties
     */
    private String body;

    /**
     * String body of the http response
     */
    public String getBody() {
        return body;
    }

    /**
     * @param _code    The HTTP status code
     * @param _headers The HTTP headers read from response
     * @param _rawBody The raw data returned by the HTTP request
     * @return Http response initialized with the given code, headers and rawBody
     */
    public HttpStringResponse(int _code, Map<String, String> _headers, InputStream _rawBody, String body) {
        super(_code, _headers, _rawBody);
        this.body = body;
    }
}
