geocoder = new google.maps.Geocoder();

address1 = document.getElementById("address1").value;
address2 = document.getElementById("address2").value;

if (geocoder)
{
   geocoder.geocode( { 'address': address1}, function(results, status)
   {
      if (status == google.maps.GeocoderStatus.OK)
      {
         //location of first address (latitude + longitude)
         location1 = results[0].geometry.location;
      } else
      {
         alert("Geocode was not successful for the following reason: " + status);
      }
   });
   geocoder.geocode( { 'address': address2}, function(results, status)
   {
      if (status == google.maps.GeocoderStatus.OK)
      {
         //location of second address (latitude + longitude)
         location2 = results[0].geometry.location;
         // calling the showMap() function to create and show the map
         showMap();
      } else
      {
        alert("Geocode was not successful for the following reason: " + status);
      }
   });
}	

latlng = new google.maps.LatLng((location1.lat()+location2.lat())/2,(location1.lng()+location2.lng())/2);

var mapOptions =
{
   zoom: 1,
   center: latlng,
   mapTypeId: google.maps.MapTypeId.HYBRID
};

map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

directionsService = new google.maps.DirectionsService();
directionsDisplay = new google.maps.DirectionsRenderer(
{
   suppressMarkers: true,
   suppressInfoWindows: true
});
directionsDisplay.setMap(map);
var request = {
   origin:location1,
   destination:location2,
   travelMode: google.maps.DirectionsTravelMode.DRIVING
};
directionsService.route(request, function(response, status)
{
   if (status == google.maps.DirectionsStatus.OK)
   {
      directionsDisplay.setDirections(response);
      distance = "The distance between the two points on the chosen route is: "+response.routes[0].legs[0].distance.text;
      distance += "The aproximative driving time is: "+response.routes[0].legs[0].duration.text;
      document.getElementById("distance_road").innerHTML = distance;
   }
});

var line = new google.maps.Polyline({
   map: map,
   path: [location1, location2],
   strokeWeight: 7,
   strokeOpacity: 0.8,
   strokeColor: "#FFAA00"
});

var R = 6371;
var dLat = toRad(location2.lat()-location1.lat());
var dLon = toRad(location2.lng()-location1.lng());
var dLat1 = toRad(location1.lat());
var dLat2 = toRad(location2.lat());
var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.cos(dLat1) * Math.cos(dLat1) *
        Math.sin(dLon/2) * Math.sin(dLon/2);
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
var d = R * c;

document.getElementById("distance_direct").innerHTML = "The distance between the two points (in a straight line) is: "+d;

var marker1 = new google.maps.Marker({
   map: map,
   position: location1,
   title: "First location"
});

var marker2 = new google.maps.Marker({
   map: map,
   position: location2,
   title: "Second location"
});

// create the text to be shown in the infowindows

var text1 = '
<div id="content">'+</div>
  '<h1 id="firstHeading">First location'+
  '<div id="bodyContent">'+
  '<p>Coordinates: '+location1+'</p>'+
  '<p>Address: '+address1+'</p>'+
  '</div>'+
  '</div>';

var text2 = '
<div id="content">'+</div>
  '<h1 id="firstHeading">Second location'+
  '<div id="bodyContent">'+
  '<p>Coordinates: '+location2+'</p>'+
  '<p>Address: '+address2+'</p>'+
  '</div>'+
  '</div>';

// create info boxes for the two markers
var infowindow1 = new google.maps.InfoWindow({
   content: text1
});
var infowindow2 = new google.maps.InfoWindow({
   content: text2
});

// add action events so the info windows will be shown when the marker is clicked
google.maps.event.addListener(marker1, 'click', function() {
   infowindow1.open(map,marker1);
});

google.maps.event.addListener(marker2, 'click', function() {
   infowindow2.open(map,marker2);
});