$(function () {
	$("#available").hide();
	$("#notAvailable").hide();
	var day = new Date();
	var curTime = day.getUTCHours();
	if(curTime >= 6) {
		$("#notAvailable").show();
	} else {
		$("#available").show();
	}
});