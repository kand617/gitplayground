/*
 * TesterRequest.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 12/22/2015
 */
using System;
using TesterRequest.PCL.Controllers;

namespace TesterRequest.PCL
{
    public partial class TesterRequestClient
    {

        /// <summary>
        /// Singleton access to ResponseTypes controller
        /// </summary>
        public ResponseTypesController ResponseTypes
        {
            get
            {
                return ResponseTypesController.Instance;
            }
        }

        /// <summary>
        /// Singleton access to ErrorCodes controller
        /// </summary>
        public ErrorCodesController ErrorCodes
        {
            get
            {
                return ErrorCodesController.Instance;
            }
        }

        /// <summary>
        /// Singleton access to BodyParams controller
        /// </summary>
        public BodyParamsController BodyParams
        {
            get
            {
                return BodyParamsController.Instance;
            }
        }

        /// <summary>
        /// Singleton access to FormParams controller
        /// </summary>
        public FormParamsController FormParams
        {
            get
            {
                return FormParamsController.Instance;
            }
        }

        /// <summary>
        /// Singleton access to Echo controller
        /// </summary>
        public EchoController Echo
        {
            get
            {
                return EchoController.Instance;
            }
        }

        /// <summary>
        /// Singleton access to Header controller
        /// </summary>
        public HeaderController Header
        {
            get
            {
                return HeaderController.Instance;
            }
        }

        /// <summary>
        /// Singleton access to QueryParam controller
        /// </summary>
        public QueryParamController QueryParam
        {
            get
            {
                return QueryParamController.Instance;
            }
        }

        /// <summary>
        /// Singleton access to DeleteParams controller
        /// </summary>
        public DeleteParamsController DeleteParams
        {
            get
            {
                return DeleteParamsController.Instance;
            }
        }

        /// <summary>
        /// Client constructor
        /// </summary>
        public TesterRequestClient()
        {
        }
    }
}