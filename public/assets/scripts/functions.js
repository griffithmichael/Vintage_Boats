function CreateUPMChart(theData, theLabels){
	var upmData = {
		labels : theLabels,
		datasets : [
			{
				label: "My First dataset",
				fillColor: "rgba(255,10,10,0.7)",
				strokeColor: "rgba(220,220,220,1)",
				HighlightFill : "#fff",
				HighlightStroke : "rgba(6, 197, 172, 1)",
				data : theData
			}
		]

	};
    if (!!document.getElementById("cUsersPerMonth"))
	    var upmBar = document.getElementById("cUsersPerMonth").getContext("2d");
	new Chart(upmBar).Bar(upmData, {responsive: true});
}

function CreateBoatManChart(theData){
	var colours = [
		["#F7464A", "#FF5A5E"],
		["#46BFBD", "#5AD3D1"],
		["#FDB45C", "#FFC870"]
	]
	var chartData = [];
	var manufacturers = 0;
	theData.forEach(manufacturer => {
		chartData.push(
			{
				value: manufacturer['COUNT(*)'],
				color: colours[manufacturers][0],
				highlight: colours[manufacturers][1],
				label: manufacturer['manufacturer']
			}
		);
		manufacturers++;
	});
    if (!!document.getElementById("cBoatsByManufacturer"))
	    var chart = document.getElementById("cBoatsByManufacturer").getContext("2d");
	new Chart(chart).Pie(chartData, {responsive: true});
}

function CreateEventPopChart(theData){
	var chartData = {
		labels : [],
		datasets : [
			{
				label: "",
				fillColor: "rgba(255,10,10,0.7)",
				strokeColor: "rgba(220,220,220,1)",
				HighlightFill : "#fff",
				HighlightStroke : "rgba(6, 197, 172, 1)",
				data : []
			}
		]
	};

	theData.forEach(event => {
		chartData['labels'].push(event['event_name']);
		chartData['datasets'][0]['data'].push(event['amount_attending']);
	});

    if (!!document.getElementById("cEventPopularity"))
	    var chart = document.getElementById("cEventPopularity").getContext("2d");
	new Chart(chart).Bar(chartData, {responsive: true});
}