jQuery( document ).ready( function( $ ) {
 	$('.settingbutton').on('click', function(){
    if($(this).hasClass('no_active')){
        $(this).removeClass('no_active').addClass('active');
		$(".nuhost-template-demo").animate({"right": "-250px"}, 100);
    }else{
        $(this).addClass('no_active');
		$(".nuhost-template-demo").animate({"right": "0px"}, 100);
    }
    });
	 $(".nuhost-template-header-styles-demo a").on("click", function (e)
   {
        e.preventDefault();
        var color = $(this).attr("href");
        $(".nuhost-template-header-styles-demo a").removeClass("active");
        $(this).addClass("active");
      });
	  
	        $("#christmas-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header purple-linear-background-header blue-linear-background-header green-two-linear-background-header purple-two-linear-background-header');
            $("#header").addClass('christmas-edition');
			$(".video-bg-nuhost-header").addClass('d-none');	
			});
			
			
			$("#video-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header purple-linear-background-header blue-linear-background-header green-two-linear-background-header purple-two-linear-background-header christmas-edition');
			$(".video-bg-nuhost-header").removeClass('d-none');			
			
			});$("#first-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header purple-linear-background-header blue-linear-background-header green-two-linear-background-header purple-two-linear-background-header christmas-edition');
            $("#header").addClass('simple');
			$(".video-bg-nuhost-header").addClass('d-none');	
			});

			$("#second-demo-style").click(function() {
			$("#header").removeClass('purple-linear-background-header blue-linear-background-header green-two-linear-background-header purple-two-linear-background-header christmas-edition');
            $("#header").addClass('green-linear-background-header');
			$(".video-bg-nuhost-header").addClass('d-none');	
			});

			$("#third-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header blue-linear-background-header green-two-linear-background-header purple-two-linear-background-header christmas-edition');
            $("#header").addClass('purple-linear-background-header');
			$(".video-bg-nuhost-header").addClass('d-none');	
			});

			$("#fourth-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header purple-linear-background-header green-two-linear-background-header purple-two-linear-background-header christmas-edition');
            $("#header").addClass('blue-linear-background-header');
			$(".video-bg-nuhost-header").addClass('d-none');	
			});

			$("#fiveth-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header purple-linear-background-header blue-linear-background-header  purple-two-linear-background-header christmas-edition');
            $("#header").addClass('green-two-linear-background-header');
			$(".video-bg-nuhost-header").addClass('d-none');	
			});

			$("#sixth-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header purple-linear-background-header blue-linear-background-header green-two-linear-background-header christmas-edition');
            $("#header").addClass('purple-two-linear-background-header');
			$(".video-bg-nuhost-header").addClass('d-none');	
			});

    } );