/*
 * TesterRequest.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/22/2015
 */
using System;
using System.Collections.Generic;
using System.Dynamic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using TesterRequest.PCL;
using TesterRequest.PCL.Http.Request;
using TesterRequest.PCL.Http.Response;
using TesterRequest.PCL.Http.Client;

using TesterRequest.PCL.Models;

namespace TesterRequest.PCL.Controllers
{
    public partial class EchoController: BaseController
    {
        #region Singleton Pattern

        //private static variables for the singleton pattern
        private static object syncObject = new object();
        private static EchoController instance = null;

        /// <summary>
        /// Singleton pattern implementation
        /// </summary>
        internal static EchoController Instance
        {
            get
            {
                lock (syncObject)
                {
                    if (null == instance)
                    {
                        instance = new EchoController();
                    }
                }
                return instance;
            }
        }

        #endregion Singleton Pattern

        /// <summary>
        /// Echo's back the request
        /// </summary>
        /// <param name="input">Required parameter: TODO: type parameter description here</param>
        /// <return>Returns the dynamic response from the API call</return>
        public async Task<dynamic> JsonEchoAsync(
                object input)
        {
            //the base uri for api requestss
            string _baseUri = Configuration.BaseUri;

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                {"user-agent", "Stamplay SDK"},
                {"accept", "application/json"},
                {"content-type", "application/json; charset=utf-8"}
            };

            //append body params
            var _body = APIHelper.JsonSerialize(input);

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

            //invoke request and get response
            HttpStringResponse _response = (HttpStringResponse) await ClientInstance.ExecuteAsStringAsync(_request);
            HttpContext _context = new HttpContext(_request,_response);

            //Error handling using HTTP status codes
            if ((_response.StatusCode < 200) || (_response.StatusCode > 206)) //[200,206] = HTTP OK
                throw new APIException(@"HTTP Response Not OK", _context);

            try
            {
                return APIHelper.JsonDeserialize<dynamic>(_response.Body);
            }
            catch (Exception ex)
            {
                throw new APIException("Failed to parse the response: " + ex.Message, _context);
            }
        }

        /// <summary>
        /// Sends the request including any form params as JSON
        /// </summary>
        /// <param name="input">Required parameter: TODO: type parameter description here</param>
        /// <return>Returns the dynamic response from the API call</return>
        public async Task<dynamic> FormEchoAsync(
                object input)
        {
            //the base uri for api requestss
            string _baseUri = Configuration.BaseUri;

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                {"user-agent", "Stamplay SDK"},
                {"accept", "application/json"},
                {"content-type", "application/json; charset=utf-8"}
            };

            //append body params
            var _body = APIHelper.JsonSerialize(input);

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

            //invoke request and get response
            HttpStringResponse _response = (HttpStringResponse) await ClientInstance.ExecuteAsStringAsync(_request);
            HttpContext _context = new HttpContext(_request,_response);

            //Error handling using HTTP status codes
            if ((_response.StatusCode < 200) || (_response.StatusCode > 206)) //[200,206] = HTTP OK
                throw new APIException(@"HTTP Response Not OK", _context);

            try
            {
                return APIHelper.JsonDeserialize<dynamic>(_response.Body);
            }
            catch (Exception ex)
            {
                throw new APIException("Failed to parse the response: " + ex.Message, _context);
            }
        }

    }
} 