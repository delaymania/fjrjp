function initialize() {
 var map;
    var brooklyn = new google.maps.LatLng(35.703505, 139.988579);
    var MY_MAPTYPE_ID = 'funabashi';   
  var featureOpts = [
    {
        "stylers": [
            {
                "hue": "#B39B70"
            },
            {
                "saturation": -70
            }
        ],
        "elementType": "all",
        "featureType": "all"
    }
     
]
   
  var mapOptions = {
    zoom: 15,
    center: brooklyn,
	scaleControl: true, 
    scrollwheel: false,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
    mapTypeId: MY_MAPTYPE_ID
  };
 
   map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
 
 
 
  var image = '/wp-content/themes/next-at/img/access/ico_map_funabashi.png'; //マーカーアイコン画像URL
  var marker = new google.maps.Marker({
      position: brooklyn,
      map: map,
      icon:image, //アイコン画像をセット
      title: '(株)ネクスト 船橋スタジオ'
  });
 
   
  var styledMapOptions = {
   name: '(株)ネクスト 船橋スタジオ'
  };
 
var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
 
  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
 
}
 
google.maps.event.addDomListener(window, 'load', initialize);
 