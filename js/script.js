$(document).ready(function() {
	$(".linkScreen").click(function(){
		$(".screen").slideUp(800);
	});

	$(".link").click(function(){
		$(".screen").slideDown(800);
	});
});