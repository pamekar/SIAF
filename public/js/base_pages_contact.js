/*
 *  Document   : base_pages_contact.js
 *  Author     : pixelcave
 */
var BasePagesContact=function(){var n=function(){new GMaps({div:"#js-map-contact",lat:37.75755,lng:-122.43688,zoom:15,disableDefaultUI:!0,scrollwheel:!1}).addMarkers([{lat:37.75755,lng:-122.43688,title:"Marker #1",animation:google.maps.Animation.DROP,infoWindow:{content:"<strong>Company</strong>"}}])};return{init:function(){n()}}}();jQuery(function(){BasePagesContact.init()});
