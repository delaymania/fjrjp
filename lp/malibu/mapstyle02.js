function initialize02() {
  var latlng = new google.maps.LatLng(35.4431224,139.6493856);
  var myOptions = {
    zoom: 16,/*拡大比率*/
    center: latlng,/*表示枠内の中心点*/
    mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] }/*表示タイプの指定*/
  };
  var map = new google.maps.Map(document.getElementById('map_canvas_yokohama'), myOptions);
  var baseUrl = window.location.origin +'/zerocube/wp-content/themes/zerocube/images/ico_map_malibu_y.png';
  var icon = {
      url: baseUrl, // url
      scaledSize: new google.maps.Size(98, 109), // scaled size
      origin: new google.maps.Point(0,0), // origin
  };
  var markerOptions = {
    position: latlng,
    map: map,
    icon: icon,
    title: '(株)ネクスト 横浜スタジオ'
  };
  var marker = new google.maps.Marker(markerOptions);
  /*取得スタイルの貼り付け*/
  var styleOptions = [
  {
    "stylers": [
    { "saturation": -100 },
    { "visibility": "simplified" },
    { "lightness": 22 }
    ]
  }
  ];
  var styledMapOptions = { name: '(株)ネクスト 横浜スタジオ' }
  var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
  map.mapTypes.set('sample', sampleType);
  map.setMapTypeId('sample');
}
google.maps.event.addDomListener(window, 'load', initialize02);

