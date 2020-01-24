/**
 * Load main js resources
 * @version 1.4.2
 * @miniversion 1.24.0
 * @author John Falcon for Woblii
 * Let's do this together
 */

import Vue from 'vue';
import homeTabs from './components/homeTabs.vue';
import investorProfile from './components/investorProfile.vue';
import entrepreneurProfile from './components/entrepreneurProfile.vue';
import miniProfile from './components/miniProfile.vue';

var VueResource = require('vue-resource');
Vue.use(VueResource);

/* Global Event handler for Vue */
window._Event = new Vue();

Vue.component('home-tabs', homeTabs);
Vue.component('profile-investor', investorProfile);
Vue.component('profile-entrepreneur', entrepreneurProfile);
Vue.component('mini-profile', miniProfile);

var vm = new Vue({
    el: '#app',
    data: {
            message: 'You loaded this page on ' + new Date().toLocaleString()
    },
    methods: {

        ajaxRequest: function( method, endpoint, data, contentType, includeHeaders, successCallback, errorCallback, eventName, cachedRequest ){

            _Event.$emit('loading-content', true);
            eventName   = eventName ? eventName : 'ajax-response-received';
            var options = {};
            options.responseType = 'json';
            this.my_headers['Content-Type'] = (contentType && contentType !== 'json' && contentType !== 'application/json')
                ? contentType
                : 'application/json';
            this.my_headers['Cache-Control'] = (typeof cachedRequest != 'undefined' && !cachedRequest)
                ? 'public, no-cache'
                : 'public, max-age=3600';
            options.headers 	 = (includeHeaders) ? this.my_headers : {};
            options.method 		 = (method)     ? method : 'get';
            // console.log(this.my_headers);
            if(data && method === 'get'){
                options.params = data;
            }else if(data){
                options.body = data;
            }

            if( ['post', 'put', 'patch'].includes(method) ){

                return this.$http[method]( this.base_api_url + endpoint, options.body, options )
                    .then(response => {

                        if(typeof successCallback === 'function')
                            return successCallback();
                        _Event.$emit(eventName, response.body);
                    }, response => {
                        _Event.$emit(eventName, response.body);
                        if(typeof errorCallback === 'function')
                            return errorCallback();
                    })
                    .catch((e) => {
                        console.log("Caught", e);
                    })
            }
            return this.$http[method]( this.base_api_url + endpoint, options )
                .then(response => {

                    if(typeof successCallback === 'function')
                        return successCallback();
                    _Event.$emit(eventName, response.body);
                }, response => {
                    _Event.$emit(eventName, response.body);
                    if(typeof errorCallback === 'function')
                        return errorCallback();
                })
                .catch((e) => {
                    console.log("Caught", e);
                })
        },
        isEmpty: function(my_object) {
            for(var key in my_object){
                if(my_object.hasOwnProperty(key))
                    return false;
            }
            return true;
        },
        insertParam: function(key, value){
            key = encodeURI(key); value = encodeURI(value);

            var kvp = document.location.search.substr(1).split('&');

            var i=kvp.length; var x; while(i--)
            {
                x = kvp[i].split('=');

                if (x[0]==key)
                {
                    x[1] = value;
                    kvp[i] = x.join('=');
                    break;
                }
            }

            if(i<0) {kvp[kvp.length] = [key,value].join('=');}

            //this will reload the page, it's likely better to store this until finished
            document.location.search = kvp.join('&');
        },
        truncate: function( text, wordCount ){
            var ellipsis = (text.split(" ").length <= wordCount) ? "" : "...";
            return text.split(" ").splice( 0, wordCount ).join(" ") + ellipsis;
        },
        url: function( concatenate ){
            concatenate = typeof concatenate !== 'undefined' ? concatenate : '';
            return this.base_url + '/' + concatenate;
        },
        api: function( concatenate ){
            return this.base_api_url + '/' + concatenate;
        },
        parseAmount: function( amount, spanCents ){
            if(!amount) return;
            amount = amount.toString();
            amount = amount.substring(0, amount.length-2) + "." + amount.substring(amount.length-2);
            var formatted = numeral(amount).format('$0,0.00');
            if(typeof spanCents != 'undefined' && spanCents)
                return formatted.substring(0, formatted.length-3) + "<span class='cents'>"+formatted.substring(formatted.length-3) + "</span>";
            return formatted.substring(0, formatted.length-3);
        },
        decodeAmount: function( amount ){
            if(!! amount){
                var amountObj = numeral(amount);
                var trailing = (amountObj.input().toString().match(/\.\d0/)) ? 10 : 1;
                trailing = (amountObj.input().toString().match(/\.00/)) ? 100 : trailing;
                return numeral(amountObj.value().toString().replace(/\./, '')).value()*trailing;
            }
        },
        setUrlVars: function( key, val, reload ) {
            var vars = {};
            var url = new URL(window.location.href);

            // If your expected result is "http://foo.bar/?x=42&y=2"
            url.searchParams.set( key, val );

            history.pushState( {}, "Artificially pushed state", url );
        },
        getUrlVars: function() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function( m, key, value ) {
                vars[key] = value;
            });
            return vars;
        },
        emitEvent: function(eventName, data) {
            _Event.$emit(eventName, data);
        },
        saveLocal: function(localVar, data) {

            var ls = window.localStorage;
            if(! ls)
                return false;

            if(typeof data === 'object')
                data = JSON.stringify(data);
            return ls.setItem(localVar, data);
        },
        deleteLocal: function(localVar) {

            var ls = window.localStorage;
            if(! ls)
                return false;
            return ls.removeItem(localVar);
        },
        fetchLocal: function(localVar) {

            var ls = window.localStorage;
            if(! ls)
                return false;
            return ls.getItem(localVar);
        },
        setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        },
        getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return false;
        }

    }
});
