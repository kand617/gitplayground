/*
 * TesterRequest.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/22/2015
 */
using System;

using TesterRequest.PCL.Http.Client;

namespace TesterRequest.PCL.Controllers
{
	public partial class BaseController
    {
        internal IHttpClient ClientInstance = null;

        public BaseController()
        {
            ClientInstance = UnirestClient.SharedClient;
        }

        public BaseController(IHttpClient client)
        {
            ClientInstance = client;
        }

    }
} 