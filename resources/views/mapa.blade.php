<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="map" style="  width:500px; height: 500px;"></div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	var map;
	function init(){
var mapOptions={

	center: new google.maps.LatLng(-22.0091073,-63.6745678), zoom: 15,
	mapTypeId: google.maps.MapTypeId.ROADMAP
}
map= new google.maps.Map(document.getEmentById("map").mapOptions);

	}
</script>
</body>
</html>