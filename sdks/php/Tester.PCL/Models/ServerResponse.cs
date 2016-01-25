/*
 * Tester.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC BETA v2.0 on 01/21/2016
 */
using System;
using System.IO;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using Tester.PCL;

namespace Tester.PCL.Models
{
    public class ServerResponse : INotifyPropertyChanged 
    {
        // These fields hold the values for the public properties.
        private bool passed;
        private string message;

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("passed")]
        public bool Passed 
        { 
            get 
            {
                return this.passed; 
            } 
            set 
            {
                this.passed = value;
                onPropertyChanged("Passed");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("Message")]
        public string Message 
        { 
            get 
            {
                return this.message; 
            } 
            set 
            {
                this.message = value;
                onPropertyChanged("Message");
            }
        }

        /// <summary>
        /// Property changed event for observer pattern
        /// </summary>
        public event PropertyChangedEventHandler PropertyChanged;

        /// <summary>
        /// Raises event when a property is changed
        /// </summary>
        /// <param name="propertyName">Name of the changed property</param>
        protected void onPropertyChanged(String propertyName)
        {
            if (PropertyChanged != null)
            {
                PropertyChanged(this, new PropertyChangedEventArgs(propertyName));
            }
        }
    }
} 