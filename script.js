$(function() {
	$(".logoBox").hide().delay(500).fadeIn(1200);
	$(".underBox").hide();
});
$(".logoBox").mouseover(function() {
	$(".underBox").fadeIn(1200)
});