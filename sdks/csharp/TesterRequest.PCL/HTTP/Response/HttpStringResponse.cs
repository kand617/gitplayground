using System;
using System.Collections.Generic;

namespace TesterRequest.PCL.Http.Response

{
    public class HttpStringResponse : HttpResponse
    {
        /// <summary>
        /// String body of the http response
        /// </summary>
        public String Body { get; set; }
    }
}
