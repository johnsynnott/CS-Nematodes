var map;
$(document).ready(function(){
	map = new GMaps({
		div: '#map',
		lat: 42.275642,
		lng: -71.804731,
		zoom: 9
	});


	$.getJSON("map.json",function(points){
		for(var pid = 0; pid < points.length; pid++) {
			var p = points[pid];

			var widget = '<p>';
			widget += '<u>' + p.locName + ', ' + p.city + ', ' + p.state + '</u><br>';
			widget += 'Thanks to ' + p.sampler + '<br>';
			widget += '<a href="#' + pid + '">More info / find in chart</a>';
			widget += '</p>';

			var row = '<tr id="'+ pid +'">';
			row += '<td>' + p.sampler + '</td>';
			row += '<td>' + p.locName + '</td>';
			row += '<td>' + p.city + '</td>';
			row += '<td>' + p.state + '</td>';
			row += '<td>' + p.latitude + '</td>';
			row += '<td>' + p.longitude + '</td>';
			row += '<td>' + p.elevation + '</td>';
			row += '<td>' + p.date + '</td>';
			row += '<td>' + p.sampleTime + '</td>';
			row += '<td>' + p.weather + '</td>';
			row += '<td>' + p.temperture + '</td>';
			row += '<td>' + p.samples + '</td>';
			row += '<td>' + p.nematodesFound + '</td>';
			row += '<td>' + p.strains + '</td>';
			row += '</tr>';

			$("#chart").append(row);

			map.addMarker({
				lat: p.latitude,
				lng: p.longitude,
				title: p.locName,
				infoWindow: {
					content: widget
				}
			});
		}
		$("#DataTable").tablesorter();
	});
});