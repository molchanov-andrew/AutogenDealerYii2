$(document).ready(function(){
	$(".change_lan").click(function(){
		$(".change_lan").removeClass("active");
		$(this).addClass("active");
	});
		
	$(".menu_item").click(function(){
		if($(".menu_item .hide_show").hasClass("active")){
			$(".menu_item .hide_show").removeClass("active");
			$(".menu_item .hide_show").slideUp();
		}else{
			$(this).find(".hide_show").addClass("active").slideDown();
		}
		
	});
	$(".hamburger_menu").click(function(){
		$(".bottom_line_header").slideDown();
		$(".menu_mob_active").fadeIn().css("display","flex");
	});
	$(".menu_mob_active").click(function(){
		$(".bottom_line_header").slideUp();
		$(".menu_mob_active").fadeOut().css("display","none");
	});

	if(screen.width < 1025){
		$('.category_wrapper').slick({
  			  dots: true,
			  infinite: false,
			  speed: 300,
			  slidesToShow: 4,
			  slidesToScroll: 4,

			  responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			});
	}
		
	
	$(".categories_catalogue").click(function(){
		if($(".categories_catalogue").hasClass("categorie_active")){
			$(this).find(".category_change").slideUp(300);
			$(this).removeClass("categorie_active");
		}else{
			$(".categories_catalogue .category_change").slideUp();
			$(".categories_catalogue").removeClass("categorie_active");
			$(this).find(".category_change").slideDown(300);
			$(this).addClass("categorie_active");
		}
	});
	

	// $(".categories_catalogue").click(function(){
	// 	$(".categories_catalogue").removeClass("categorie_active");
	//  		$(this).find(".category_change").slideDown(300);
	//  		$(this).addClass("categorie_active");
	// });
	$(".category_littre .category_visible").click(function(){
		if($(".category_littre").hasClass("closed")){
			$(".category_littre .category_change").slideDown(300);
			$(".category_littre").removeClass("closed");
		}else{
			$(".category_littre .category_change").slideUp(300);
		$(".category_littre").addClass("closed");
		}
	});
	$(".category_power .category_visible").click(function(){
		if($(".category_power").hasClass("closed")){
			$(".category_power .category_change").slideDown(300);
			$(".category_power").removeClass("closed");
		}else{
			$(".category_power .category_change").slideUp(300);
		$(".category_power").addClass("closed");
		}
	});
	


	$(".main_brand_button").click(function(){
		if($(".main_brand_button").hasClass("close_filter")){
			$(".brand_filter_name").fadeIn(200);
			$(".main_brand_button").removeClass("close_filter")
		}else{
			$(".brand_fliter .brand_filter_name").fadeOut(200);
			$(".main_brand_button").addClass("close_filter");
		}
		
	});

});