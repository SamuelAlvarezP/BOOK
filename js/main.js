$(document).ready(function(){
	$("#accordian h3").click(function(){
		$("#accordian ul ul").slideup();

		if (!$(this).next().is(":visible")) {
			$(this).next().slidedown();
		}
	})
})
