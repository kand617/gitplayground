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
    public partial class HeaderController: BaseController
    {
        #region Singleton Pattern

        //private static variables for the singleton pattern
        private static object syncObject = new object();
        private static HeaderController instance = null;

        /// <summary>
        /// Singleton pattern implementation
        /// </summary>
        internal static HeaderController Instance
        {
            get
            {
                lock (syncObject)
                {
                    if (null == instance)
                    {
                        instance = new HeaderController();
                    }
                }
                return instance;
            }
        }

        #endregion Singleton Pattern

        /// <summary>
        /// Sends a single header params
        /// </summary>
        /// <param name="customHeader">Required parameter: TODO: type parameter description here</param>
        /// <param name="mvalue">Required parameter: Represents the value of the custom header</param>
        /// <return>Returns the string response from the API call</return>
        public async Task<string> SendHeadersAsync(
                string customHeader,
                string mvalue)
        {
            //the base uri for api requestss
            string _baseUri = Configuration.BaseUri;

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/header");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                {"user-agent", "Stamplay SDK"},
                {"custom-header", customHeader}
            };

            //append form/field parameters
            var _fields = new Dictionary<string,object>()
            {
                {"value", mvalue}
            };

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.Post(_queryUrl, _headers, _fields);

            //invoke request and get response
            HttpStringResponse _response = (HttpStringResponse) await ClientInstance.ExecuteAsStringAsync(_request);
            HttpContext _context = new HttpContext(_request,_response);

            //Error handling using HTTP status codes
            if ((_response.StatusCode < 200) || (_response.StatusCode > 206)) //[200,206] = HTTP OK
                throw new APIException(@"HTTP Response Not OK", _context);

            try
            {
                return _response.Body;
            }
            catch (Exception ex)
            {
                throw new APIException("Failed to parse the response: " + ex.Message, _context);
            }
        }

    }
} 