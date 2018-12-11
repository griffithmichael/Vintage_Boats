function CreateUPMChart(theData, theLabels){
	var testLineData = {
		labels : ["a label", "another label"],
		datasets : [
			{
				label: "My First dataset",
				fillColor: "rgba(220,220,220,0.2)",
				strokeColor: "rgba(220,220,220,1)",
				pointColor: "rgba(220,220,220,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(6, 197, 172, 1)",
				data : theData
			},
			{
				label: "My Second dataset",
					fillColor: "rgba(151,187,205,0.2)",
				strokeColor: "rgba(151,187,205,1)",
				pointColor: "rgba(151,187,205,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(244, 204, 11, 1)",
				data : []
			}
		]

	};
    if (!!document.getElementById("cUsersPerMonth"))
	    var testLine = document.getElementById("cUsersPerMonth").getContext("2d");
	new Chart(testLine).Line(testLineData, {responsive: true});
}