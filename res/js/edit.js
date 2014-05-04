var map;
$(document).ready(function(){

	$.getJSON("map.json",function(points){

		for(var pid = 0; pid < points.length; pid++) {
			var p = points[pid];

			var row = '<tr class="dataRow" id="'+ pid +'">';
			row += '<td class="editable sampler">' + p.sampler + '</td>';
			row += '<td class="editable locName">' + p.locName + '</td>';
			row += '<td class="editable city">' + p.city + '</td>';
			row += '<td class="editable state">' + p.state + '</td>';
			row += '<td class="editable latitude">' + p.latitude + '</td>';
			row += '<td class="editable longitude">' + p.longitude + '</td>';
			row += '<td class="editable elevation">' + p.elevation + '</td>';
			row += '<td class="editable date">' + p.date + '</td>';
			row += '<td class="editable sampleTime">' + p.sampleTime + '</td>';
			row += '<td class="editable weather">' + p.weather + '</td>';
			row += '<td class="editable temperture">' + p.temperture + '</td>';
			row += '<td class="editable samples">' + p.samples + '</td>';
			row += '<td class="editable nematodesFound">' + p.nematodesFound + '</td>';
			row += '<td class="editable strains">' + p.strains + '</td>';
			row += '<td class="removeCont"><a class="btn remove">X</a></td>';
			row += '</tr>';

			$("#chart").append(row);
		}
		$("#DataTable").tablesorter();
	});
});

$("#chart").on("click", ".editable", function(e) {
	var content = $(this).text();
	$(this).html('<input id="editingElement" type="text" value="' + content + '"></input>');
	$(this).removeClass("editable");
	$(this).addClass("editing");
	$('#editingElement').focus();
});

$("#chart").on("blur", ".editing", function(e) {
	var content = $('#editingElement').val();
	$(this).html(content);
	$(this).removeClass("editing");
	$(this).addClass("editable");
});

$("#chart").on("keypress", ".editing", function(e) {
	if (e.which == 13) {
		var content = $('#editingElement').val();
		$(this).html(content);
		$(this).removeClass("editing");
		$(this).addClass("editable");
	}
});

$("#controlContainer").on("click", "#newRowButton", function() {
	var row = '<tr class="dataRow">';
	row += '<td class="editable sampler"></td>';
	row += '<td class="editable locName"></td>';
	row += '<td class="editable city"></td>';
	row += '<td class="editable state"></td>';
	row += '<td class="editable latitude"></td>';
	row += '<td class="editable longitude"></td>';
	row += '<td class="editable elevation"></td>';
	row += '<td class="editable date"></td>';
	row += '<td class="editable sampleTime"></td>';
	row += '<td class="editable weather"></td>';
	row += '<td class="editable temperture"></td>';
	row += '<td class="editable samples"></td>';
	row += '<td class="editable nematodesFound"></td>';
	row += '<td class="editable strains"></td>';
	row += '<td class="removeCont"><a class="btn remove">X</a></td>';
	row += '</tr>';

	$("#chart").append(row);
});

$('form').submit(function(e) {
	console.log('ran1');
	//e.preventDefault();
	console.log('ran2');
	var JSON = "[";
	var count = 0;
	$("#chart").children("tr").each(function() {
		if (count == 0) {
			JSON += "\n\t{";
		} else {
			JSON += ",\n\t{"
		}
		count++;

		var sampler = $(this).find('.sampler').text();
		var locName = $(this).find('.locName').text();
		var city = $(this).find('.city').text();
		var state = $(this).find('.state').text();
		var latitude = $(this).find('.latitude').text();
		var longitude = $(this).find('.longitude').text();
		var elevation = $(this).find('.elevation').text();
		var date = $(this).find('.date').text();
		var sampleTime = $(this).find('.sampleTime').text();
		var weather = $(this).find('.weather').text();
		var temperture = $(this).find('.temperture').text();
		var samples = $(this).find('.samples').text();
		var nematodesFound = $(this).find('.nematodesFound').text();
		var strains = $(this).find('.strains').text();

		JSON += '\n\t\t"sampler": "' + sampler + '",';
		JSON += '\n\t\t"locName": "' + locName + '",';
		JSON += '\n\t\t"city": "' + city + '",';
		JSON += '\n\t\t"state": "' + state + '",';
		JSON += '\n\t\t"latitude": "' + latitude + '",';
		JSON += '\n\t\t"longitude": "' + longitude + '",';
		JSON += '\n\t\t"elevation": "' + elevation + '",';
		JSON += '\n\t\t"date": "' + date + '",';
		JSON += '\n\t\t"sampleTime": "' + sampleTime + '",';
		JSON += '\n\t\t"weather": "' + weather + '",';
		JSON += '\n\t\t"temperture": "' + temperture + '",';
		JSON += '\n\t\t"samples": "' + samples + '",';
		JSON += '\n\t\t"nematodesFound": "' + nematodesFound + '",';
		JSON += '\n\t\t"strains": "' + strains + '"';

		JSON += "\n\t}";
	});
	
	JSON += "\n]";
	console.log('ran3');
	$("#JSONCont").val(JSON);
	console.log('ran4');
	return true;
	console.log('ran5');
});

$("#chart").on("click", ".remove", function(e) {
	$(this).parent().parent().remove();
});