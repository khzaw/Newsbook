$(document).ready(function() {
	
	//	Set the slider to be sliding
	$("#unlock-slider").slider({
		handle: "#unlock-handle",
		animate: true,
		slide: function(e,ui)
		{
			$("#slide-to-unlock").css("opacity", 1-(parseInt($("#unlock-handle").css("left"))/120));
		},
		stop: function(e,ui)
		{
			if($("#unlock-handle").position().left == 685)
			{
				unlock();
			}
			else
			{
				$("#unlock-handle").animate({left: 0}, 200);
				$("#slide-to-unlock").animate({opacity: 1}, 200);
			}
		}
	});
	
	var unlock = function() {
		
		$("#unlock-bottom").animate({bottom: -100}, 300);
		$("#unlock-top").animate({top: -100}, 300, '', function()
		{});
		$("#iphone-inside").fadeOut("normal", function(){window.location="home.php";});
		
	}
	
})